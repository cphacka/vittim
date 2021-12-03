<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\pilot_status;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\pilot_statusStoreRequest;
use App\Http\Requests\AltrpRequests\pilot_statusUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class pilot_statusController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * pilot_statusController constructor.
     */
    public function __construct()
    {
        $this->modelClass = pilot_status::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(pilot_statusStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $pilot_status = new pilot_status;

        $regChat = ChatService::registerInChat($pilot_status->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($pilot_status->getTable(), $data);

        $pilot_status->fill($data);

        $res = $pilot_status->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$pilot_status], 200, [], JSON_UNESCAPED_UNICODE);
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
        $pilot_status = pilot_status::find($id);

        if(! $pilot_status) {
            return response()->json(trans("responses.not_found.pilot_status"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'pilot_status')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $pilot_status = $pilot_status->load($relations);
        }

        $pilot_status = $this->getRemoteData($model, $pilot_status, true);

        return response()->json($pilot_status, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(pilot_statusUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $pilot_status = pilot_status::find($id);

        if(! $pilot_status) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.pilot_status")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($pilot_status->getTable(), $data);

        $result = $pilot_status->update($data);

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
        $pilot_status = pilot_status::find($id);

        if(! $pilot_status) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.pilot_status")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $pilot_status->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.pilot_status")], 200, [], JSON_UNESCAPED_UNICODE);
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
        $pilot_status = pilot_status::find($id);

        if(! $pilot_status) {
            return response()->json(['success'=>false, 'message' =>"pilot_status not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($pilot_status->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $pilot_status->$column = $request->column_value;

        if ($pilot_status->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $pilot_statuses = pilot_status::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($pilot_statuses, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

    public function select_pilot_status(ApiRequest $request)
    {
        $entity = Model::where('name', 'pilot_status')->first()->altrp_sql_editors->where('name', 'select_pilot_status')->first();

        $res = selectForSQLEditor(
        "SELECT `ps`.`id` as \"value\", `ps`.`name` as \"label\"
FROM `vit_pilot_statuses` as `ps`",  [], [
           'sql_name' => 'select_pilot_status',
           'table_name' => 'pilot_statuses',
         ], $request );



        $res['data'] = $this->getRemoteData($entity, $res, $entity->is_object);

        return response()->json( $res, 200, [], JSON_UNESCAPED_UNICODE );
    }
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOMIZERS_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}