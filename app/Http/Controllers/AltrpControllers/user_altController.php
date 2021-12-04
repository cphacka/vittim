<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\user_alt;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\user_altStoreRequest;
use App\Http\Requests\AltrpRequests\user_altUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class user_altController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * user_altController constructor.
     */
    public function __construct()
    {
        $this->modelClass = user_alt::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(user_altStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $user_alt = new user_alt;

        $regChat = ChatService::registerInChat($user_alt->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($user_alt->getTable(), $data);

        $user_alt->fill($data);

        $res = $user_alt->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$user_alt], 200, [], JSON_UNESCAPED_UNICODE);
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
        $user_alt = user_alt::find($id);

        if(! $user_alt) {
            return response()->json(trans("responses.not_found.user_alt"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'user_alt')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $user_alt = $user_alt->load($relations);
        }

        $user_alt = $this->getRemoteData($model, $user_alt, true);

        return response()->json($user_alt, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(user_altUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $user_alt = user_alt::find($id);

        if(! $user_alt) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.user_alt")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($user_alt->getTable(), $data);

        $result = $user_alt->update($data);

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
        $user_alt = user_alt::find($id);

        if(! $user_alt) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.user_alt")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $user_alt->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.user_alt")], 200, [], JSON_UNESCAPED_UNICODE);
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
        $user_alt = user_alt::find($id);

        if(! $user_alt) {
            return response()->json(['success'=>false, 'message' =>"user_alt not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($user_alt->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $user_alt->$column = $request->column_value;

        if ($user_alt->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $user_alts = user_alt::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($user_alts, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

	public function registration_2pjbgi5ly( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.response_code', 200);set_customizer_data('context.response_headers', []);set_customizer_data('context.response_options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.response_data.success', true);set_customizer_data('context.user', \App\User::find($request->get('id'))->attachRole(3));return get_customizer_data('context.response')->json(get_customizer_data('context.response_data'), get_customizer_data('context.response_code'), get_customizer_data('context.response_headers'), get_customizer_data('context.response_options'));
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