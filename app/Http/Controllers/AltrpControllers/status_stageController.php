<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\status_stage;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\status_stageStoreRequest;
use App\Http\Requests\AltrpRequests\status_stageUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class status_stageController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * status_stageController constructor.
     */
    public function __construct()
    {
        $this->modelClass = status_stage::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(status_stageStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $status_stage = new status_stage;

        $regChat = ChatService::registerInChat($status_stage->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($status_stage->getTable(), $data);

        $status_stage->fill($data);

        $res = $status_stage->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$status_stage], 200, [], JSON_UNESCAPED_UNICODE);
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
        $status_stage = status_stage::find($id);

        if(! $status_stage) {
            return response()->json(trans("responses.not_found.status_stage"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'status_stage')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $status_stage = $status_stage->load($relations);
        }

        $status_stage = $this->getRemoteData($model, $status_stage, true);

        return response()->json($status_stage, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(status_stageUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $status_stage = status_stage::find($id);

        if(! $status_stage) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.status_stage")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($status_stage->getTable(), $data);

        $result = $status_stage->update($data);

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
        $status_stage = status_stage::find($id);

        if(! $status_stage) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.status_stage")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $status_stage->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.status_stage")], 200, [], JSON_UNESCAPED_UNICODE);
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
        $status_stage = status_stage::find($id);

        if(! $status_stage) {
            return response()->json(['success'=>false, 'message' =>"status_stage not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($status_stage->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $status_stage->$column = $request->column_value;

        if ($status_stage->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $status_stages = status_stage::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($status_stages, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

    public function select_status_stage(ApiRequest $request)
    {
        $entity = Model::where('name', 'status_stage')->first()->altrp_sql_editors->where('name', 'select_status_stage')->first();

        $res = selectForSQLEditor(
        "SELECT `st`.`id` as \"value\", `st`.`name` as \"label\"
FROM `vit_status_stages` as `st`",  [], [
           'sql_name' => 'select_status_stage',
           'table_name' => 'status_stages',
         ], $request );



        $res['data'] = $this->getRemoteData($entity, $res, $entity->is_object);

        return response()->json( $res, 200, [], JSON_UNESCAPED_UNICODE );
    }

    public function pilot_stages(ApiRequest $request)
    {
        $entity = Model::where('name', 'status_stage')->first()->altrp_sql_editors->where('name', 'pilot_stages')->first();

        $res = selectForSQLEditor(
        "select `p`.* from `vit_pilot_stages` as `p`
where `p`.`pilot_id` = " . request()->id . "",  [], [
           'sql_name' => 'pilot_stages',
           'table_name' => 'status_stages',
         ], $request );



        $res['data'] = $this->getRemoteData($entity, $res, $entity->is_object);

        return response()->json( $res, 200, [], JSON_UNESCAPED_UNICODE );
    }
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

	public function get_status_stage_wdr2jmedu( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\status_stage::all());return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));
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

	public function put_status_stage_bp6481z3d( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\status_stage::find($request->get('id')));if( get_customizer_data('context.data.data') == null ){set_customizer_data('context.data.success', false);set_customizer_data('context.status', 405);return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}if( get_customizer_data('context.data.data') != null ){set_customizer_data('context.data.data', get_customizer_data('context.data.data')->update($request->all(), []));return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}
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

	public function add_status_stage_324e7776k( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', new \App\AltrpModels\status_stage($request->all()));set_customizer_data('context.data.data', get_customizer_data('context.data.data')->save([]));return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));
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

	public function delete_status_stage_4x4asmmb1( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\status_stage::find($request->get('id')));if( get_customizer_data('context.data.data') == null ){set_customizer_data('context.data.success', false);set_customizer_data('context.status', 405);return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}if( get_customizer_data('context.data.data') != null ){set_customizer_data('context.data.data', get_customizer_data('context.data.data')->delete());return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}
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