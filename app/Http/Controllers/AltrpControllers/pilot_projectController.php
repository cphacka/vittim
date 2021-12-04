<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\pilot_project;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\pilot_projectStoreRequest;
use App\Http\Requests\AltrpRequests\pilot_projectUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class pilot_projectController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * pilot_projectController constructor.
     */
    public function __construct()
    {
        $this->modelClass = pilot_project::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(pilot_projectStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $pilot_project = new pilot_project;

        $regChat = ChatService::registerInChat($pilot_project->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($pilot_project->getTable(), $data);

        $pilot_project->fill($data);

        $res = $pilot_project->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$pilot_project], 200, [], JSON_UNESCAPED_UNICODE);
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
        $pilot_project = pilot_project::find($id);

        if(! $pilot_project) {
            return response()->json(trans("responses.not_found.pilot_project"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'pilot_project')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $pilot_project = $pilot_project->load($relations);
        }

        $pilot_project = $this->getRemoteData($model, $pilot_project, true);

        return response()->json($pilot_project, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(pilot_projectUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $pilot_project = pilot_project::find($id);

        if(! $pilot_project) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.pilot_project")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($pilot_project->getTable(), $data);

        $result = $pilot_project->update($data);

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
        $pilot_project = pilot_project::find($id);

        if(! $pilot_project) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.pilot_project")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $pilot_project->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.pilot_project")], 200, [], JSON_UNESCAPED_UNICODE);
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
        $pilot_project = pilot_project::find($id);

        if(! $pilot_project) {
            return response()->json(['success'=>false, 'message' =>"pilot_project not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($pilot_project->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $pilot_project->$column = $request->column_value;

        if ($pilot_project->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $pilot_projects = pilot_project::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($pilot_projects, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

    public function pilots_proj(ApiRequest $request)
    {
        $entity = Model::where('name', 'pilot_project')->first()->altrp_sql_editors->where('name', 'pilots_proj')->first();

        $res = selectForSQLEditor(
        "select `p`.* from `vit_pilot_projects` as `p`
where `p`.`startup_id` = " . request()->id . "",  [], [
           'sql_name' => 'pilots_proj',
           'table_name' => 'pilot_projects',
         ], $request );



        $res['data'] = $this->getRemoteData($entity, $res, $entity->is_object);

        return response()->json( $res, 200, [], JSON_UNESCAPED_UNICODE );
    }
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

	public function get_pilot_project_sxp9lbtwj( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\pilot_project::all());return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));
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

	public function add_pilot_project_0fvaqbo6n( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', new \App\AltrpModels\pilot_project($request->all()));set_customizer_data('context.data.data', get_customizer_data('context.data.data')->save([]));return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));
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