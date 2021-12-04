<?php
/*Api routes*/
// Routes for the pilots resource
Route::get('/pilots', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@index']);
Route::get('/pilot_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@options']);
Route::post('/pilots', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@store']);
Route::get('/pilots/{pilot}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@show']);
Route::put('/pilots/{pilot}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@update']);
Route::delete('/pilots/{pilot}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@destroy']);
Route::put('/pilots/{pilot}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@updateColumn']);
Route::get('/filters/pilots/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilotController@getIndexedColumnsValueWithCount']);
// Routes for the startups resource
Route::get('/startups/{startup}', ['uses' => 'AltrpControllers\startupController@show']);
Route::get('/queries/startups/select_startups', ['uses' => 'AltrpControllers\startupController@select_startups']);
Route::get('/startups/customizers/get_startup_v7eisu6de', ['uses' =>'AltrpControllers\startupController@get_startup_v7eisu6de']);
Route::post('/startups/customizers/add_startup2_7r4njics1', ['uses' =>'AltrpControllers\startupController@add_startup2_7r4njics1']);
Route::get('/queries/startups/get_startups_filter', ['uses' =>'AltrpControllers\startupController@get_startups_filter']);
Route::post('/startups/customizers/add_startup_s7cy2v12h', ['uses' =>'AltrpControllers\startupController@add_startup_s7cy2v12h']);
Route::delete('/startups/customizers/delete_startup_omxo8owju', ['uses' =>'AltrpControllers\startupController@delete_startup_omxo8owju']);
Route::get('/startups/customizers/find_startup_h2rpl6thh', ['uses' =>'AltrpControllers\startupController@find_startup_h2rpl6thh']);
Route::get('/startups', ['uses' =>'AltrpControllers\startupController@index']);
Route::get('/startup_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startupController@options']);
Route::post('/startups', ['uses' =>'AltrpControllers\startupController@store']);
Route::put('/startups/{startup}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startupController@update']);
Route::get('/filters/startups/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startupController@getIndexedColumnsValueWithCount']);
Route::put('/startups/{startup}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startupController@updateColumn']);
Route::delete('/startups/{startup}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startupController@destroy']);
// Routes for the pilot_projects resource
Route::put('/pilot_projects/customizers/put_pilot_project_z3qmw4il3', ['uses' =>'AltrpControllers\pilot_projectController@put_pilot_project_z3qmw4il3']);
Route::delete('/pilot_projects/customizers/delete_pilot_project_i4v76qx7p', ['uses' =>'AltrpControllers\pilot_projectController@delete_pilot_project_i4v76qx7p']);
Route::get('/queries/pilot_projects/pilots_proj', ['uses' =>'AltrpControllers\pilot_projectController@pilots_proj']);
Route::get('/pilot_projects', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@index']);
Route::get('/pilot_project_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@options']);
Route::post('/pilot_projects', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@store']);
Route::get('/pilot_projects/{pilot_project}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@show']);
Route::put('/pilot_projects/{pilot_project}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@update']);
Route::delete('/pilot_projects/{pilot_project}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@destroy']);
Route::put('/pilot_projects/{pilot_project}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@updateColumn']);
Route::get('/filters/pilot_projects/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_identifications resource
Route::get('/queries/pilot_identifications/pilot_identifications', ['uses' => 'AltrpControllers\pilot_identificationController@pilot_identifications']);
Route::get('/pilot_identifications/customizers/get_pilot_identification_14dd8n7uh', ['uses' =>'AltrpControllers\pilot_identificationController@get_pilot_identification_14dd8n7uh']);
Route::post('/pilot_identifications/customizers/add_pilot_identification_xpflx95si', ['uses' =>'AltrpControllers\pilot_identificationController@add_pilot_identification_xpflx95si']);
Route::put('/pilot_identifications/customizers/put_pilot_identification_bvx27rxlw', ['uses' =>'AltrpControllers\pilot_identificationController@put_pilot_identification_bvx27rxlw']);
Route::delete('/pilot_identifications/customizers/delete_pilot_identification_xpzc7ps82', ['uses' =>'AltrpControllers\pilot_identificationController@delete_pilot_identification_xpzc7ps82']);
Route::get('/pilot_identifications', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@index']);
Route::get('/pilot_identification_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@options']);
Route::post('/pilot_identifications', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@store']);
Route::get('/pilot_identifications/{pilot_identification}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@show']);
Route::put('/pilot_identifications/{pilot_identification}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@update']);
Route::delete('/pilot_identifications/{pilot_identification}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@destroy']);
Route::put('/pilot_identifications/{pilot_identification}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@updateColumn']);
Route::get('/filters/pilot_identifications/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_effects resource
Route::get('/queries/pilot_effects/pilot_effects', ['uses' => 'AltrpControllers\pilot_effectController@pilot_effects']);
Route::get('/pilot_effects', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@index']);
Route::get('/pilot_effect_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@options']);
Route::post('/pilot_effects', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@store']);
Route::get('/pilot_effects/{pilot_effect}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@show']);
Route::put('/pilot_effects/{pilot_effect}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@update']);
Route::delete('/pilot_effects/{pilot_effect}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@destroy']);
Route::put('/pilot_effects/{pilot_effect}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@updateColumn']);
Route::get('/filters/pilot_effects/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_stages resource
Route::get('/pilot_stages', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@index']);
Route::get('/pilot_stage_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@options']);
Route::post('/pilot_stages', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@store']);
Route::get('/pilot_stages/{pilot_stage}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@show']);
Route::put('/pilot_stages/{pilot_stage}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@update']);
Route::delete('/pilot_stages/{pilot_stage}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@destroy']);
Route::put('/pilot_stages/{pilot_stage}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@updateColumn']);
Route::get('/filters/pilot_stages/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_teams resource
Route::get('/queries/pilot_teams/pilot_teams', ['uses' => 'AltrpControllers\pilot_teamController@pilot_teams']);
Route::get('/pilot_teams', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@index']);
Route::get('/pilot_team_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@options']);
Route::post('/pilot_teams', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@store']);
Route::get('/pilot_teams/{pilot_team}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@show']);
Route::put('/pilot_teams/{pilot_team}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@update']);
Route::delete('/pilot_teams/{pilot_team}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@destroy']);
Route::put('/pilot_teams/{pilot_team}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@updateColumn']);
Route::get('/filters/pilot_teams/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_budgets resource
Route::get('/queries/pilot_budgets/pilot_budgets', ['uses' => 'AltrpControllers\pilot_budgetController@pilot_budgets']);
Route::get('/pilot_budgets', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@index']);
Route::get('/pilot_budget_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@options']);
Route::post('/pilot_budgets', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@store']);
Route::get('/pilot_budgets/{pilot_budget}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@show']);
Route::put('/pilot_budgets/{pilot_budget}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@update']);
Route::delete('/pilot_budgets/{pilot_budget}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@destroy']);
Route::put('/pilot_budgets/{pilot_budget}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@updateColumn']);
Route::get('/filters/pilot_budgets/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_events resource
Route::get('/queries/pilot_events/pilot_events', ['uses' => 'AltrpControllers\pilot_eventController@pilot_events']);
Route::get('/pilot_events', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@index']);
Route::get('/pilot_event_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@options']);
Route::post('/pilot_events', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@store']);
Route::get('/pilot_events/{pilot_event}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@show']);
Route::put('/pilot_events/{pilot_event}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@update']);
Route::delete('/pilot_events/{pilot_event}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@destroy']);
Route::put('/pilot_events/{pilot_event}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@updateColumn']);
Route::get('/filters/pilot_events/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@getIndexedColumnsValueWithCount']);
// Routes for the technologies resource
Route::get('/queries/technologies/select_technology', ['uses' => 'AltrpControllers\technologyController@select_technology']);
Route::get('/technologies', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@index']);
Route::get('/technology_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@options']);
Route::post('/technologies', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@store']);
Route::get('/technologies/{technology}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@show']);
Route::put('/technologies/{technology}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@update']);
Route::delete('/technologies/{technology}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@destroy']);
Route::put('/technologies/{technology}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@updateColumn']);
Route::get('/filters/technologies/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\technologyController@getIndexedColumnsValueWithCount']);
// Routes for the industries resource
Route::get('/queries/industries/select_industry', ['uses' => 'AltrpControllers\industryController@select_industry']);
Route::get('/industries', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@index']);
Route::get('/industry_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@options']);
Route::post('/industries', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@store']);
Route::get('/industries/{industry}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@show']);
Route::put('/industries/{industry}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@update']);
Route::delete('/industries/{industry}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@destroy']);
Route::put('/industries/{industry}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@updateColumn']);
Route::get('/filters/industries/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\industryController@getIndexedColumnsValueWithCount']);
// Routes for the branches resource
Route::get('/queries/branches/branch', ['uses' => 'AltrpControllers\branchController@branch']);
Route::get('/branches', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@index']);
Route::get('/branch_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@options']);
Route::post('/branches', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@store']);
Route::get('/branches/{branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@show']);
Route::put('/branches/{branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@update']);
Route::delete('/branches/{branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@destroy']);
Route::put('/branches/{branch}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@updateColumn']);
Route::get('/filters/branches/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\branchController@getIndexedColumnsValueWithCount']);
// Routes for the startup_branches resource
Route::post('/startup_branches', ['uses' => 'AltrpControllers\startup_branchController@store']);
Route::get('/startup_branches', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@index']);
Route::get('/startup_branch_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@options']);
Route::get('/startup_branches/{startup_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@show']);
Route::put('/startup_branches/{startup_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@update']);
Route::delete('/startup_branches/{startup_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@destroy']);
Route::put('/startup_branches/{startup_branch}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@updateColumn']);
Route::get('/filters/startup_branches/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@getIndexedColumnsValueWithCount']);
// Routes for the startup_technologies resource
Route::post('/startup_technologies', ['uses' => 'AltrpControllers\startup_technologyController@store']);
Route::get('/startup_technologies', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@index']);
Route::get('/startup_technology_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@options']);
Route::get('/startup_technologies/{startup_technology}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@show']);
Route::put('/startup_technologies/{startup_technology}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@update']);
Route::delete('/startup_technologies/{startup_technology}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@destroy']);
Route::put('/startup_technologies/{startup_technology}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@updateColumn']);
Route::get('/filters/startup_technologies/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@getIndexedColumnsValueWithCount']);
// Routes for the status_stages resource
Route::get('/queries/status_stages/pilot_stages', ['uses' => 'AltrpControllers\status_stageController@pilot_stages']);
Route::get('/queries/status_stages/select_status_stage', ['uses' => 'AltrpControllers\status_stageController@select_status_stage']);
Route::get('/status_stages', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@index']);
Route::get('/status_stage_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@options']);
Route::post('/status_stages', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@store']);
Route::get('/status_stages/{status_stage}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@show']);
Route::put('/status_stages/{status_stage}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@update']);
Route::delete('/status_stages/{status_stage}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@destroy']);
Route::put('/status_stages/{status_stage}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@updateColumn']);
Route::get('/filters/status_stages/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_stageController@getIndexedColumnsValueWithCount']);
// Routes for the status_readies resource
Route::get('/queries/status_readies/select_status_ready', ['uses' => 'AltrpControllers\status_readyController@select_status_ready']);
Route::get('/status_readies', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@index']);
Route::get('/status_ready_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@options']);
Route::post('/status_readies', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@store']);
Route::get('/status_readies/{status_ready}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@show']);
Route::put('/status_readies/{status_ready}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@update']);
Route::delete('/status_readies/{status_ready}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@destroy']);
Route::put('/status_readies/{status_ready}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@updateColumn']);
Route::get('/filters/status_readies/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\status_readyController@getIndexedColumnsValueWithCount']);
// Routes for the contacts resource
Route::get('/queries/contacts/select_contact', ['uses' => 'AltrpControllers\contactController@select_contact']);
Route::get('/contacts', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@index']);
Route::get('/contact_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@options']);
Route::post('/contacts', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@store']);
Route::get('/contacts/{contact}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@show']);
Route::put('/contacts/{contact}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@update']);
Route::delete('/contacts/{contact}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@destroy']);
Route::put('/contacts/{contact}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@updateColumn']);
Route::get('/filters/contacts/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\contactController@getIndexedColumnsValueWithCount']);
// Routes for the orgs resource
Route::get('/queries/orgs/select_org', ['uses' => 'AltrpControllers\orgController@select_org']);
Route::put('/orgs/customizers/put_org_dcuu90chw', ['uses' =>'AltrpControllers\orgController@put_org_dcuu90chw']);
Route::post('/orgs/customizers/add_org_f2ymsmo7z', ['uses' =>'AltrpControllers\orgController@add_org_f2ymsmo7z']);
Route::delete('/orgs/customizers/delete_org_7fuvsi21s', ['uses' =>'AltrpControllers\orgController@delete_org_7fuvsi21s']);
Route::get('/orgs', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@index']);
Route::get('/org_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@options']);
Route::post('/orgs', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@store']);
Route::get('/orgs/{org}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@show']);
Route::put('/orgs/{org}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@update']);
Route::delete('/orgs/{org}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@destroy']);
Route::put('/orgs/{org}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@updateColumn']);
Route::get('/filters/orgs/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\orgController@getIndexedColumnsValueWithCount']);
// Routes for the org_teams resource
Route::get('/org_teams', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@index']);
Route::get('/org_team_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@options']);
Route::post('/org_teams', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@store']);
Route::get('/org_teams/{org_team}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@show']);
Route::put('/org_teams/{org_team}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@update']);
Route::delete('/org_teams/{org_team}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@destroy']);
Route::put('/org_teams/{org_team}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@updateColumn']);
Route::get('/filters/org_teams/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_teamController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_meetings resource
Route::get('/queries/pilot_meetings/pilot_meetings', ['uses' => 'AltrpControllers\pilot_meetingController@pilot_meetings']);
Route::get('/pilot_meetings', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@index']);
Route::get('/pilot_meeting_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@options']);
Route::post('/pilot_meetings', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@store']);
Route::get('/pilot_meetings/{pilot_meeting}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@show']);
Route::put('/pilot_meetings/{pilot_meeting}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@update']);
Route::delete('/pilot_meetings/{pilot_meeting}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@destroy']);
Route::put('/pilot_meetings/{pilot_meeting}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@updateColumn']);
Route::get('/filters/pilot_meetings/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_statuses resource
Route::get('/queries/pilot_statuses/select_pilot_status', ['uses' =>'AltrpControllers\pilot_statusController@select_pilot_status']);
Route::get('/pilot_statuses', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@index']);
Route::get('/pilot_status_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@options']);
Route::post('/pilot_statuses', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@store']);
Route::get('/pilot_statuses/{pilot_status}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@show']);
Route::put('/pilot_statuses/{pilot_status}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@update']);
Route::delete('/pilot_statuses/{pilot_status}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@destroy']);
Route::put('/pilot_statuses/{pilot_status}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@updateColumn']);
Route::get('/filters/pilot_statuses/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_galleries resource
Route::get('/pilot_galleries', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@index']);
Route::get('/pilot_gallery_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@options']);
Route::post('/pilot_galleries', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@store']);
Route::get('/pilot_galleries/{pilot_gallery}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@show']);
Route::put('/pilot_galleries/{pilot_gallery}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@update']);
Route::delete('/pilot_galleries/{pilot_gallery}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@destroy']);
Route::put('/pilot_galleries/{pilot_gallery}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@updateColumn']);
Route::get('/filters/pilot_galleries/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@getIndexedColumnsValueWithCount']);
// Routes for the handlers resource
Route::get('/handlers', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@index']);
Route::get('/handler_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@options']);
Route::post('/handlers', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@store']);
Route::get('/handlers/{handler}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@show']);
Route::put('/handlers/{handler}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@update']);
Route::delete('/handlers/{handler}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@destroy']);
Route::put('/handlers/{handler}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@updateColumn']);
Route::get('/filters/handlers/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handlerController@getIndexedColumnsValueWithCount']);
// Routes for the comments resource
Route::get('/comments', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@index']);
Route::get('/comment_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@options']);
Route::post('/comments', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@store']);
Route::get('/comments/{comment}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@show']);
Route::put('/comments/{comment}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@update']);
Route::delete('/comments/{comment}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@destroy']);
Route::put('/comments/{comment}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@updateColumn']);
Route::get('/filters/comments/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\commentController@getIndexedColumnsValueWithCount']);
// Routes for the comment_startups resource
Route::get('/comment_startups', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@index']);
Route::get('/comment_startup_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@options']);
Route::post('/comment_startups', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@store']);
Route::get('/comment_startups/{comment_startup}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@show']);
Route::put('/comment_startups/{comment_startup}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@update']);
Route::delete('/comment_startups/{comment_startup}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@destroy']);
Route::put('/comment_startups/{comment_startup}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@updateColumn']);
Route::get('/filters/comment_startups/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@getIndexedColumnsValueWithCount']);
// Routes for the comment_pilots resource
Route::get('/comment_pilots', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@index']);
Route::get('/comment_pilot_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@options']);
Route::post('/comment_pilots', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@store']);
Route::get('/comment_pilots/{comment_pilot}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@show']);
Route::put('/comment_pilots/{comment_pilot}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@update']);
Route::delete('/comment_pilots/{comment_pilot}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@destroy']);
Route::put('/comment_pilots/{comment_pilot}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@updateColumn']);
Route::get('/filters/comment_pilots/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@getIndexedColumnsValueWithCount']);
// Routes for the flows resource
Route::get('/flows', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@index']);
Route::get('/flow_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@options']);
Route::post('/flows', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@store']);
Route::get('/flows/{flow}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@show']);
Route::put('/flows/{flow}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@update']);
Route::delete('/flows/{flow}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@destroy']);
Route::put('/flows/{flow}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@updateColumn']);
Route::get('/filters/flows/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flowController@getIndexedColumnsValueWithCount']);
// Routes for the flow_types resource
Route::get('/queries/flow_types/select_flow_type', ['uses' => 'AltrpControllers\flow_typeController@select_flow_type']);
Route::get('/flow_types', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@index']);
Route::get('/flow_type_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@options']);
Route::post('/flow_types', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@store']);
Route::get('/flow_types/{flow_type}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@show']);
Route::put('/flow_types/{flow_type}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@update']);
Route::delete('/flow_types/{flow_type}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@destroy']);
Route::put('/flow_types/{flow_type}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@updateColumn']);
Route::get('/filters/flow_types/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@getIndexedColumnsValueWithCount']);
// Routes for the favorites resource
Route::get('/favorites', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@index']);
Route::get('/favorite_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@options']);
Route::post('/favorites', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@store']);
Route::get('/favorites/{favorite}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@show']);
Route::put('/favorites/{favorite}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@update']);
Route::delete('/favorites/{favorite}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@destroy']);
Route::put('/favorites/{favorite}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@updateColumn']);
Route::get('/filters/favorites/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\favoriteController@getIndexedColumnsValueWithCount']);
// Routes for the user_alts resource
Route::get('/user_alts', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@index']);
Route::get('/user_alt_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@options']);
Route::post('/user_alts', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@store']);
Route::get('/user_alts/{user_alt}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@show']);
Route::put('/user_alts/{user_alt}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@update']);
Route::delete('/user_alts/{user_alt}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@destroy']);
Route::put('/user_alts/{user_alt}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@updateColumn']);
Route::get('/filters/user_alts/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\user_altController@getIndexedColumnsValueWithCount']);
// Routes for the media_alts resource
Route::get('/media_alts', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@index']);
Route::get('/media_alt_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@options']);
Route::post('/media_alts', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@store']);
Route::get('/media_alts/{media_alt}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@show']);
Route::put('/media_alts/{media_alt}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@update']);
Route::delete('/media_alts/{media_alt}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@destroy']);
Route::put('/media_alts/{media_alt}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@updateColumn']);
Route::get('/filters/media_alts/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\media_altController@getIndexedColumnsValueWithCount']);
// Routes for the startup_news resource
Route::get('/startup_news', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@index']);
Route::get('/startup_news_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@options']);
Route::post('/startup_news', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@store']);
Route::get('/startup_news/{startup_news}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@show']);
Route::put('/startup_news/{startup_news}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@update']);
Route::delete('/startup_news/{startup_news}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@destroy']);
Route::put('/startup_news/{startup_news}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@updateColumn']);
Route::get('/filters/startup_news/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@getIndexedColumnsValueWithCount']);
// Routes for the comment_startup_news resource
Route::get('/comment_startup_news', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@index']);
Route::get('/comment_startup_news_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@options']);
Route::post('/comment_startup_news', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@store']);
Route::get('/comment_startup_news/{comment_startup_news}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@show']);
Route::put('/comment_startup_news/{comment_startup_news}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@update']);
Route::delete('/comment_startup_news/{comment_startup_news}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@destroy']);
Route::put('/comment_startup_news/{comment_startup_news}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@updateColumn']);
Route::get('/filters/comment_startup_news/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@getIndexedColumnsValueWithCount']);
// Routes for the handler_histories resource
Route::get('/handler_histories', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@index']);
Route::get('/handler_history_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@options']);
Route::post('/handler_histories', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@store']);
Route::get('/handler_histories/{handler_history}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@show']);
Route::put('/handler_histories/{handler_history}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@update']);
Route::delete('/handler_histories/{handler_history}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@destroy']);
Route::put('/handler_histories/{handler_history}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@updateColumn']);
Route::get('/filters/handler_histories/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_files resource
Route::get('/queries/pilot_files/pilot_files', ['uses' => 'AltrpControllers\pilot_fileController@pilot_files']);
Route::get('/pilot_files', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@index']);
Route::get('/pilot_file_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@options']);
Route::post('/pilot_files', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@store']);
Route::get('/pilot_files/{pilot_file}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@show']);
Route::put('/pilot_files/{pilot_file}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@update']);
Route::delete('/pilot_files/{pilot_file}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@destroy']);
Route::put('/pilot_files/{pilot_file}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@updateColumn']);
Route::get('/filters/pilot_files/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@getIndexedColumnsValueWithCount']);
// Routes for the count_people resource
Route::get('/queries/count_people/select_count', ['uses' => 'AltrpControllers\count_personController@select_count']);
Route::get('/queries/count_people/select_count_person', ['uses' => 'AltrpControllers\count_personController@select_count_person']);
Route::get('/count_people', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@index']);
Route::get('/count_person_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@options']);
Route::post('/count_people', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@store']);
Route::get('/count_people/{count_person}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@show']);
Route::put('/count_people/{count_person}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@update']);
Route::delete('/count_people/{count_person}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@destroy']);
Route::put('/count_people/{count_person}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@updateColumn']);
Route::get('/filters/count_people/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\count_personController@getIndexedColumnsValueWithCount']);
// Routes for the org_branches resource
Route::get('/org_branches', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@index']);
Route::get('/org_branch_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@options']);
Route::post('/org_branches', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@store']);
Route::get('/org_branches/{org_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@show']);
Route::put('/org_branches/{org_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@update']);
Route::delete('/org_branches/{org_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@destroy']);
Route::put('/org_branches/{org_branch}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@updateColumn']);
Route::get('/filters/org_branches/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\org_branchController@getIndexedColumnsValueWithCount']);
// Routes for the select_branches resource
Route::get('/select_branches', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@index']);
Route::get('/select_branch_options', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@options']);
Route::post('/select_branches', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@store']);
Route::get('/select_branches/{select_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@show']);
Route::put('/select_branches/{select_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@update']);
Route::delete('/select_branches/{select_branch}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@destroy']);
Route::put('/select_branches/{select_branch}/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@updateColumn']);
Route::get('/filters/select_branches/{column}', ['middleware' => ['auth:api','role:admin'], 'uses' =>'AltrpControllers\select_branchController@getIndexedColumnsValueWithCount']);