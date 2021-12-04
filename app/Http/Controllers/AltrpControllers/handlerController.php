<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\handler;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\handlerStoreRequest;
use App\Http\Requests\AltrpRequests\handlerUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class handlerController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * handlerController constructor.
     */
    public function __construct()
    {
        $this->modelClass = handler::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(handlerStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $handler = new handler;

        $regChat = ChatService::registerInChat($handler->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($handler->getTable(), $data);

        $handler->fill($data);

        $res = $handler->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$handler], 200, [], JSON_UNESCAPED_UNICODE);
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
        $handler = handler::find($id);

        if(! $handler) {
            return response()->json(trans("responses.not_found.handler"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'handler')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $handler = $handler->load($relations);
        }

        $handler = $this->getRemoteData($model, $handler, true);

        return response()->json($handler, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(handlerUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $handler = handler::find($id);

        if(! $handler) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.handler")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($handler->getTable(), $data);

        $result = $handler->update($data);

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
        $handler = handler::find($id);

        if(! $handler) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.handler")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $handler->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.handler")], 200, [], JSON_UNESCAPED_UNICODE);
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
        $handler = handler::find($id);

        if(! $handler) {
            return response()->json(['success'=>false, 'message' =>"handler not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($handler->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $handler->$column = $request->column_value;

        if ($handler->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $handlers = handler::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($handlers, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

	public function get_handler_8ckcdx81k( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\handler::all());return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));
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

	public function put_handler_4sxn7xx2h( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\handler::find($request->get('id')));if( get_customizer_data('context.data.data') == null ){set_customizer_data('context.data.success', false);set_customizer_data('context.status', 405);return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}if( get_customizer_data('context.data.data') != null ){set_customizer_data('context.data.data', get_customizer_data('context.data.data')->update($request->all(), []));return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}
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

	public function add_handler_6z36e86ni( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', new \App\AltrpModels\handler($request->all()));set_customizer_data('context.data.data', get_customizer_data('context.data.data')->save([]));return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));
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

	public function delete_handler_mwnzqpijb( ApiRequest $request ){

    try{
    set_customizer_data( 'this', $this );
    set_customizer_data( 'context.request', $request );
    set_customizer_data('context.response', response());set_customizer_data('context.status', 200);set_customizer_data('context.headers', []);set_customizer_data('context.options', JSON_UNESCAPED_UNICODE);set_customizer_data('context.data.success', true);set_customizer_data('context.data.data', \App\AltrpModels\handler::find($request->get('id')));if( get_customizer_data('context.data.data') == null ){set_customizer_data('context.data.success', false);set_customizer_data('context.status', 405);return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}if( get_customizer_data('context.data.data') != null ){set_customizer_data('context.data.data', get_customizer_data('context.data.data')->delete());return get_customizer_data('context.response')->json(get_customizer_data('context.data'), get_customizer_data('context.status'), get_customizer_data('context.headers'), get_customizer_data('context.options'));}
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