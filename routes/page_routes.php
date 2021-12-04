<?php

// =======> '/' <=======
Route::get('/', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(1);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Главная',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 1);

// =======> '/sign-up' <=======
Route::get('/sign-up', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(2);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Регистрация',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 2);

// =======> '/sign-in' <=======
Route::get('/sign-in', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(3);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Авторизация',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 3);

// =======> '/a' <=======
Route::get('/a', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(4);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Админ панель',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 4);

// =======> '/a/industry-add' <=======
Route::get('/a/industry-add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(5);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить индустрию',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 5);

// =======> '/a/industry' <=======
Route::get('/a/industry', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(6);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Список индустрий',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 6);

// =======> '/a/industry/{id}' <=======
Route::get('/a/industry/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(7);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать индустрию',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 7);

// =======> '/form_page' <=======
Route::get('/form_page', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(8);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Форма заявки',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 8);

// =======> '/404' <=======
Route::get('/404', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(9);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => '404',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 9);

// =======> '/pilots' <=======
Route::get('/pilots', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(10);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Проекты',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 10);

// =======> '/startups' <=======
Route::get('/startups', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(11);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Просмотр стартапов',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 11);

// =======> '/organization' <=======
Route::get('/organization', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(12);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Организации',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 12);

// =======> '/test_back' <=======
Route::get('/test_back', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(14);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Test_back',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 14);

// =======> '/a/solutions' <=======
Route::get('/a/solutions', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(15);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Решения',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 15);

// =======> '/a/products' <=======
Route::get('/a/products', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(16);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Продукты',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 16);

// =======> '/a/startups' <=======
Route::get('/a/startups', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(17);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Стартапы',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 17);

// =======> '/a/account' <=======
Route::get('/a/account', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(18);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Аккаунт',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 18);

// =======> '/blog' <=======
Route::get('/blog', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(19);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Блог',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 19);

// =======> '/startup-view/{id}' <=======
Route::get('/startup-view/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(21);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Просмотр стартапа',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 21);

// =======> '/blog/new' <=======
Route::get('/blog/new', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(22);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Новость в блоге',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 22);

// =======> '/a/directory' <=======
Route::get('/a/directory', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(23);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Справочники',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 23);

// =======> '/a/technologies' <=======
Route::get('/a/technologies', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(24);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Список технологии',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 24);

// =======> '/a/technologies/add' <=======
Route::get('/a/technologies/add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(25);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить технологию',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 25);

// =======> '/a/technologies/{id}' <=======
Route::get('/a/technologies/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(26);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать технологию',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 26);

// =======> '/add_pilot/{id}' <=======
Route::get('/add_pilot/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(27);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить проект',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 27);

// =======> '/pilot_view/{id}' <=======
Route::get('/pilot_view/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(28);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Просмотр проекта',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 28);

// =======> '/a/branch' <=======
Route::get('/a/branch', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(29);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Список отраслей',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 29);

// =======> '/a/branch/add' <=======
Route::get('/a/branch/add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(30);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить отрасль',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 30);

// =======> '/a/branch/{id}' <=======
Route::get('/a/branch/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(31);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать отрасль',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 31);

// =======> '/a/stage' <=======
Route::get('/a/stage', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(32);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Этапы стартапа',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 32);

// =======> '/a/stage/add' <=======
Route::get('/a/stage/add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(33);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить этап',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 33);

// =======> '/a/stage/{id}' <=======
Route::get('/a/stage/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(34);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать этап',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 34);

// =======> '/a/ready' <=======
Route::get('/a/ready', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(35);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Cтатусы готовности',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 35);

// =======> '/a/ready/add' <=======
Route::get('/a/ready/add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(36);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить статус готовности',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 36);

// =======> '/a/ready/{id}' <=======
Route::get('/a/ready/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(37);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать статус готовности',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 37);

// =======> '/a/startup-moder' <=======
Route::get('/a/startup-moder', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(38);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Модерация стартапов',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 38);

// =======> '/a/type' <=======
Route::get('/a/type', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(39);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Типы этапа в потоке',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 39);

// =======> '/a/type/add' <=======
Route::get('/a/type/add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(40);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить тип этапа',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 40);

// =======> '/a/type/{id}' <=======
Route::get('/a/type/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(41);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать тип этапа',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 41);

// =======> '/a/person' <=======
Route::get('/a/person', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(42);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Количество людей',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 42);

// =======> '/a/person/add' <=======
Route::get('/a/person/add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(43);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить людей',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 43);

// =======> '/a/person/{id}' <=======
Route::get('/a/person/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(44);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать людей',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 44);

// =======> '/a/org-branch' <=======
Route::get('/a/org-branch', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(45);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Отрасли организаций',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 45);

// =======> '/a/org-branch/add' <=======
Route::get('/a/org-branch/add', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(46);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить отрасли организаций',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 46);

// =======> '/a/org-branch/{id}' <=======
Route::get('/a/org-branch/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(47);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать отрасли организаций',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 47);

// =======> '/en' <=======
Route::get('/en', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(48);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( 0 );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], [] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Лэндинг eng',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 48);

// =======> '/a/view-startup/{id}' <=======
Route::get('/a/view-startup/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(49);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Просмотр стартапа',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 49);

// =======> '/a/view-project/{id}' <=======
Route::get('/a/view-project/{id}', function ($id) {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(50);
  $altrp_current_page = $_frontend_route;
  $_frontend_route['data_sources'] = $_frontend_route->page_data_sources->map(function (App\PageDatasource $page_data_source) {
    if ($page_data_source->source) {
      $page_data_source->source->web_url = $page_data_source->source->web_url;
    }
    return $page_data_source;
  });
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        if( false ){
          
        } else {
          $model = $model->find( $id );
        }
        if( ! $model ){
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        $model_data = $model->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        if($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
          throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException( 'Model not found' );
        }
        logger( $e->getMessage() . "\n" . $e->getFile() . " at " . $e->getLine()  );
        $model_data = [];
      }
    }
  }
  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );
  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'], ['id'=> $id,] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );
  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas , ! ! $preload_content['content']);
  $altrp_settings = getPageSettings( $_frontend_route['id'] );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }
  $pages = \App\Page::get_pages_for_frontend( true, $_frontend_route['id'], ! ! $preload_content['content'] );

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'altrp_settings' => json_encode( $altrp_settings ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Просмотр проекта',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> ['id'=> $id,],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 50);