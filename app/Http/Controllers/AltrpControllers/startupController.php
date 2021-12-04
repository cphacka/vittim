<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\startup;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\startupStoreRequest;
use App\Http\Requests\AltrpRequests\startupUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class startupController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * startupController constructor.
     */
    public function __construct()
    {
        $this->modelClass = startup::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(startupStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $startup = new startup;

        $regChat = ChatService::registerInChat($startup->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($startup->getTable(), $data);

        $startup->fill($data);

        $res = $startup->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$startup], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['success'=>false, 'message' => trans("responses.dberror")], 400, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $startup = startup::find($id);

        if(! $startup) {
            return response()->json(trans("responses.not_found.startup"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'startup')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $startup = $startup->load($relations);
        }

        $startup = $this->getRemoteData($model, $startup, true);

        return response()->json($startup, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(startupUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $startup = startup::find($id);

        if(! $startup) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.startup")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($startup->getTable(), $data);

        $result = $startup->update($data);

        if($result){
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['success'=>false, 'message' => trans("responses.dberror")], 400, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $startup = startup::find($id);

        if(! $startup) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.startup")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $startup->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.startup")], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['success'=>false, 'message' => trans("deleteerror")], 400, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update column of resource from storage.
     *
     * @param ApiRequest $request
     * @param $id
     * @param $column
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateColumn(ApiRequest $request, $id, $column)
    {
        $startup = startup::find($id);

        if(! $startup) {
            return response()->json(['success'=>false, 'message' =>"startup not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($startup->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $startup->$column = $request->column_value;

        if ($startup->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $startups = startup::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($startups, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

    public function get_startups_filter(ApiRequest $request)
    {
        $entity = Model::where('name', 'startup')->first()->altrp_sql_editors->where('name', 'get_startups_filter')->first();

        $res = selectForSQLEditor(
        "select `s`.*
from `vit_startups` as `s`
left join `vit_startup_branches` as `sb`
    on `sb`.`startup_id` = `s`.`id`
left join `vit_startup_technologies` as `st`
    on `st`.`startup_id` = `s`.`id`
left join `vit_technologies` as `th`
    on `th`.`id` = `st`.`technology_id`
left join `vit_branches` as `br`
    on `br`.`id` = `sb`.`branch_id`
left join `vit_industries` as `is`
    on `is`.`id` = `br`.`industry_id`
where `s`.`name` like \"%" . request()->name . "%\"
and 1 = 1 " . (request()->status ? '  AND s.status_stage_id = ' . '\'' .request()->status. '\'' : '') . "
and 1 = 1 " . (request()->org ? '  AND s.organization_of_interesting = ' . '\'' .request()->org. '\'' : '') . "
and 1 = 1 " . (request()->industry ? '  AND is.id = ' . '\'' .request()->industry. '\'' : '') . "
and 1 = 1 " . (request()->branch ? '  AND br.id = ' . '\'' .request()->branch. '\'' : '') . "
and 1 = 1 " . (request()->technology ? '  AND th.id = ' . '\'' .request()->technology. '\'' : '') . "",  [], [
           'sql_name' => 'get_startups_filter',
           'table_name' => 'startups',
         ], $request );



        $res['data'] = $this->getRemoteData($entity, $res, $entity->is_object);

        return response()->json( $res, 200, [], JSON_UNESCAPED_UNICODE );
    }

    public function select_startups(ApiRequest $request)
    {
        $entity = Model::where('name', 'startup')->first()->altrp_sql_editors->where('name', 'select_startups')->first();

        $res = selectForSQLEditor(
        "SELECT `st`.`id` as \"value\", `st`.`name` as \"label\"
FROM `vit_startups` as `st`",  [], [
           'sql_name' => 'select_startups',
           'table_name' => 'startups',
         ], $request );



        $res['data'] = $this->getRemoteData($entity, $res, $entity->is_object);

        return response()->json( $res, 200, [], JSON_UNESCAPED_UNICODE );
    }
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

	public function put_startup_r4sxnzw0a( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\startup::find($request->get('id')));if( get_customizer_data('context.data.data') == null ){set_customizer_data('context.data.success', false);set_customizer_data('context.status', 405);return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}if( get_customizer_data('context.data.data') != null ){set_customizer_data('context.data.data', get_customizer_data('context.data.data')->update($request->all(), []));return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}
      } catch (\Throwable $th){
        return response()->json(
        [
          'success' => false,
          'message' => 'Customizer failed!',
          'throw message' => $th->getMessage(),
          'trace' => $th->getTrace(),
        ], 500, [], JSON_UNESCAPED_UNICODE
        );
      }
      
	}
    // CUSTOMIZERS_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}