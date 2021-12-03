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
    'title' => 'Стартапы',
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

// =======> '/a/startup-page' <=======
Route::get('/a/startup-page', function () {
  global $altrp_env;
  global $altrp_current_page;
  $_frontend_route = \App\Page::find(20);
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
    'title' => 'Страница стартапа',
    '_frontend_route' => $_frontend_route,
    'pages'=> $pages,
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'route_args'=> [],
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 20);

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