<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/**
 * File for user routes
 */
// Routes for the startups resource
Route::get('/startups/customizers/get_startup_v7eisu6de', ['uses' =>'AltrpControllers\startupController@get_startup_v7eisu6de']);
Route::put('/startups/customizers/put_startup_r4sxnzw0a', ['uses' =>'AltrpControllers\startupController@put_startup_r4sxnzw0a']);
Route::delete('/startups/customizers/delete_startup_omxo8owju', ['uses' =>'AltrpControllers\startupController@delete_startup_omxo8owju']);
Route::post('/startups/customizers/add_startup2_7r4njics1', ['uses' =>'AltrpControllers\startupController@add_startup2_7r4njics1']);
Route::post('/startups/customizers/add_startup_s7cy2v12h', ['uses' =>'AltrpControllers\startupController@add_startup_s7cy2v12h']);
Route::get('/startups', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@index']);
Route::get('/startup_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@options']);
Route::post('/startups', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@store']);
Route::get('/startups/{startup}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@show']);
Route::put('/startups/{startup}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@update']);
Route::delete('/startups/{startup}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@destroy']);
Route::put('/startups/{startup}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@updateColumn']);
Route::get('/filters/startups/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startupController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_projects resource
Route::get('/queries/pilot_projects/pilots_proj', ['uses' => 'AltrpControllers\pilot_projectController@pilots_proj']);
Route::post('/pilot_projects/customizers/add_pilot_project_0fvaqbo6n', ['uses' =>'AltrpControllers\pilot_projectController@add_pilot_project_0fvaqbo6n']);
Route::get('/pilot_projects/customizers/get_pilot_project_sxp9lbtwj', ['uses' =>'AltrpControllers\pilot_projectController@get_pilot_project_sxp9lbtwj']);
Route::put('/pilot_projects/customizers/put_pilot_project_z3qmw4il3', ['uses' =>'AltrpControllers\pilot_projectController@put_pilot_project_z3qmw4il3']);
Route::delete('/pilot_projects/customizers/delete_pilot_project_i4v76qx7p', ['uses' =>'AltrpControllers\pilot_projectController@delete_pilot_project_i4v76qx7p']);
Route::get('/pilot_projects', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@index']);
Route::get('/pilot_project_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@options']);
Route::post('/pilot_projects', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@store']);
Route::get('/pilot_projects/{pilot_project}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@show']);
Route::put('/pilot_projects/{pilot_project}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@update']);
Route::delete('/pilot_projects/{pilot_project}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@destroy']);
Route::put('/pilot_projects/{pilot_project}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@updateColumn']);
Route::get('/filters/pilot_projects/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_projectController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_identifications resource
Route::get('/pilot_identifications/customizers/get_pilot_identification_14dd8n7uh', ['uses' =>'AltrpControllers\pilot_identificationController@get_pilot_identification_14dd8n7uh']);
Route::post('/pilot_identifications/customizers/add_pilot_identification_xpflx95si', ['uses' =>'AltrpControllers\pilot_identificationController@add_pilot_identification_xpflx95si']);
Route::put('/pilot_identifications/customizers/put_pilot_identification_bvx27rxlw', ['uses' =>'AltrpControllers\pilot_identificationController@put_pilot_identification_bvx27rxlw']);
Route::delete('/pilot_identifications/customizers/delete_pilot_identification_xpzc7ps82', ['uses' =>'AltrpControllers\pilot_identificationController@delete_pilot_identification_xpzc7ps82']);
Route::get('/pilot_identifications', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@index']);
Route::get('/pilot_identification_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@options']);
Route::post('/pilot_identifications', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@store']);
Route::get('/pilot_identifications/{pilot_identification}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@show']);
Route::put('/pilot_identifications/{pilot_identification}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@update']);
Route::delete('/pilot_identifications/{pilot_identification}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@destroy']);
Route::put('/pilot_identifications/{pilot_identification}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@updateColumn']);
Route::get('/filters/pilot_identifications/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_identificationController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_effects resource
Route::get('/pilot_effects', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@index']);
Route::get('/pilot_effect_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@options']);
Route::post('/pilot_effects', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@store']);
Route::get('/pilot_effects/{pilot_effect}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@show']);
Route::put('/pilot_effects/{pilot_effect}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@update']);
Route::delete('/pilot_effects/{pilot_effect}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@destroy']);
Route::put('/pilot_effects/{pilot_effect}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@updateColumn']);
Route::get('/filters/pilot_effects/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_effectController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_stages resource
Route::get('/pilot_stages', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@index']);
Route::get('/pilot_stage_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@options']);
Route::post('/pilot_stages', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@store']);
Route::get('/pilot_stages/{pilot_stage}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@show']);
Route::put('/pilot_stages/{pilot_stage}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@update']);
Route::delete('/pilot_stages/{pilot_stage}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@destroy']);
Route::put('/pilot_stages/{pilot_stage}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@updateColumn']);
Route::get('/filters/pilot_stages/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_stageController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_teams resource
Route::get('/pilot_teams/customizers/get_pilot_team_zh0v81z8s', ['uses' =>'AltrpControllers\pilot_teamController@get_pilot_team_zh0v81z8s']);
Route::put('/pilot_teams/customizers/put_pilot_team_ms4i09kh9', ['uses' =>'AltrpControllers\pilot_teamController@put_pilot_team_ms4i09kh9']);
Route::post('/pilot_teams/customizers/add_pilot_team_7ch25jgxb', ['uses' =>'AltrpControllers\pilot_teamController@add_pilot_team_7ch25jgxb']);
Route::delete('/pilot_teams/customizers/delete_pilot_team_zxp9x55ay', ['uses' =>'AltrpControllers\pilot_teamController@delete_pilot_team_zxp9x55ay']);
Route::get('/pilot_teams', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@index']);
Route::get('/pilot_team_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@options']);
Route::post('/pilot_teams', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@store']);
Route::get('/pilot_teams/{pilot_team}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@show']);
Route::put('/pilot_teams/{pilot_team}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@update']);
Route::delete('/pilot_teams/{pilot_team}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@destroy']);
Route::put('/pilot_teams/{pilot_team}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@updateColumn']);
Route::get('/filters/pilot_teams/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_teamController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_budgets resource
Route::get('/pilot_budgets', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@index']);
Route::get('/pilot_budget_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@options']);
Route::post('/pilot_budgets', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@store']);
Route::get('/pilot_budgets/{pilot_budget}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@show']);
Route::put('/pilot_budgets/{pilot_budget}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@update']);
Route::delete('/pilot_budgets/{pilot_budget}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@destroy']);
Route::put('/pilot_budgets/{pilot_budget}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@updateColumn']);
Route::get('/filters/pilot_budgets/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_budgetController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_events resource
Route::get('/pilot_events', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@index']);
Route::get('/pilot_event_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@options']);
Route::post('/pilot_events', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@store']);
Route::get('/pilot_events/{pilot_event}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@show']);
Route::put('/pilot_events/{pilot_event}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@update']);
Route::delete('/pilot_events/{pilot_event}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@destroy']);
Route::put('/pilot_events/{pilot_event}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@updateColumn']);
Route::get('/filters/pilot_events/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_eventController@getIndexedColumnsValueWithCount']);
// Routes for the technologies resource
Route::get('/queries/technologies/select_technology', ['uses' =>'AltrpControllers\technologyController@select_technology']);
Route::get('/technologies/customizers/get_technology_ymwz86i96', ['uses' =>'AltrpControllers\technologyController@get_technology_ymwz86i96']);
Route::put('/technologies/customizers/put_technology_0skes22dx', ['uses' =>'AltrpControllers\technologyController@put_technology_0skes22dx']);
Route::post('/technologies/customizers/add_technology_0hctdxmfx', ['uses' =>'AltrpControllers\technologyController@add_technology_0hctdxmfx']);
Route::delete('/technologies/customizers/delete_technology_ab7ocd7u2', ['uses' =>'AltrpControllers\technologyController@delete_technology_ab7ocd7u2']);
Route::get('/technologies', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@index']);
Route::get('/technology_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@options']);
Route::post('/technologies', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@store']);
Route::get('/technologies/{technology}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@show']);
Route::put('/technologies/{technology}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@update']);
Route::delete('/technologies/{technology}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@destroy']);
Route::put('/technologies/{technology}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@updateColumn']);
Route::get('/filters/technologies/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\technologyController@getIndexedColumnsValueWithCount']);
// Routes for the industries resource
Route::get('/queries/industries/select_industry', ['uses' => 'AltrpControllers\industryController@select_industry']);
Route::get('/industries/customizers/get_industry_ak40iq8vo', ['uses' =>'AltrpControllers\industryController@get_industry_ak40iq8vo']);
Route::put('/industries/customizers/put_industry_tba5n28gi', ['uses' =>'AltrpControllers\industryController@put_industry_tba5n28gi']);
Route::post('/industries/customizers/add_industry_w0qabf84g', ['uses' =>'AltrpControllers\industryController@add_industry_w0qabf84g']);
Route::delete('/industries/customizers/delete_industry_zhrgtl9ku', ['uses' =>'AltrpControllers\industryController@delete_industry_zhrgtl9ku']);
Route::get('/industries', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@index']);
Route::get('/industry_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@options']);
Route::post('/industries', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@store']);
Route::get('/industries/{industry}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@show']);
Route::put('/industries/{industry}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@update']);
Route::delete('/industries/{industry}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@destroy']);
Route::put('/industries/{industry}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@updateColumn']);
Route::get('/filters/industries/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\industryController@getIndexedColumnsValueWithCount']);
// Routes for the branches resource
Route::get('/branches', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@index']);
Route::get('/branch_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@options']);
Route::post('/branches', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@store']);
Route::get('/branches/{branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@show']);
Route::put('/branches/{branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@update']);
Route::delete('/branches/{branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@destroy']);
Route::put('/branches/{branch}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@updateColumn']);
Route::get('/filters/branches/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\branchController@getIndexedColumnsValueWithCount']);
// Routes for the startup_branches resource
Route::get('/startup_branches', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@index']);
Route::get('/startup_branch_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@options']);
Route::post('/startup_branches', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@store']);
Route::get('/startup_branches/{startup_branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@show']);
Route::put('/startup_branches/{startup_branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@update']);
Route::delete('/startup_branches/{startup_branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@destroy']);
Route::put('/startup_branches/{startup_branch}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@updateColumn']);
Route::get('/filters/startup_branches/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_branchController@getIndexedColumnsValueWithCount']);
// Routes for the startup_technologies resource
Route::get('/startup_technologies', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@index']);
Route::get('/startup_technology_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@options']);
Route::post('/startup_technologies', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@store']);
Route::get('/startup_technologies/{startup_technology}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@show']);
Route::put('/startup_technologies/{startup_technology}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@update']);
Route::delete('/startup_technologies/{startup_technology}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@destroy']);
Route::put('/startup_technologies/{startup_technology}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@updateColumn']);
Route::get('/filters/startup_technologies/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_technologyController@getIndexedColumnsValueWithCount']);
// Routes for the status_stages resource
Route::get('/queries/status_stages/select_status_stage', ['uses' => 'AltrpControllers\status_stageController@select_status_stage']);
Route::get('/status_stages', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@index']);
Route::get('/status_stage_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@options']);
Route::post('/status_stages', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@store']);
Route::get('/status_stages/{status_stage}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@show']);
Route::put('/status_stages/{status_stage}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@update']);
Route::delete('/status_stages/{status_stage}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@destroy']);
Route::put('/status_stages/{status_stage}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@updateColumn']);
Route::get('/filters/status_stages/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_stageController@getIndexedColumnsValueWithCount']);
// Routes for the status_readies resource
Route::get('/queries/status_readies/select_status_ready', ['uses' => 'AltrpControllers\status_readyController@select_status_ready']);
Route::get('/status_readies', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@index']);
Route::get('/status_ready_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@options']);
Route::post('/status_readies', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@store']);
Route::get('/status_readies/{status_ready}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@show']);
Route::put('/status_readies/{status_ready}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@update']);
Route::delete('/status_readies/{status_ready}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@destroy']);
Route::put('/status_readies/{status_ready}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@updateColumn']);
Route::get('/filters/status_readies/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\status_readyController@getIndexedColumnsValueWithCount']);
// Routes for the contacts resource
Route::get('/queries/contacts/select_contact', ['uses' => 'AltrpControllers\contactController@select_contact']);
Route::get('/contacts/customizers/get_contact_69a8pp5eu', ['uses' =>'AltrpControllers\contactController@get_contact_69a8pp5eu']);
Route::post('/contacts/customizers/add_contact_mi3gqahzo', ['uses' =>'AltrpControllers\contactController@add_contact_mi3gqahzo']);
Route::put('/contacts/customizers/put_contact_s12q0lgh8', ['uses' =>'AltrpControllers\contactController@put_contact_s12q0lgh8']);
Route::delete('/contacts/customizers/delete_contact_e6cgnv39x', ['uses' =>'AltrpControllers\contactController@delete_contact_e6cgnv39x']);
Route::get('/contacts', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@index']);
Route::get('/contact_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@options']);
Route::post('/contacts', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@store']);
Route::get('/contacts/{contact}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@show']);
Route::put('/contacts/{contact}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@update']);
Route::delete('/contacts/{contact}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@destroy']);
Route::put('/contacts/{contact}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@updateColumn']);
Route::get('/filters/contacts/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\contactController@getIndexedColumnsValueWithCount']);
// Routes for the orgs resource
Route::put('/orgs/customizers/put_org_dcuu90chw', ['uses' =>'AltrpControllers\orgController@put_org_dcuu90chw']);
Route::post('/orgs/customizers/add_org_f2ymsmo7z', ['uses' =>'AltrpControllers\orgController@add_org_f2ymsmo7z']);
Route::delete('/orgs/customizers/delete_org_7fuvsi21s', ['uses' =>'AltrpControllers\orgController@delete_org_7fuvsi21s']);
Route::get('/queries/orgs/select_org', ['uses' =>'AltrpControllers\orgController@select_org']);
Route::get('/orgs/customizers/get_org_7jc543rx1', ['uses' =>'AltrpControllers\orgController@get_org_7jc543rx1']);
Route::get('/orgs', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@index']);
Route::get('/org_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@options']);
Route::post('/orgs', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@store']);
Route::get('/orgs/{org}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@show']);
Route::put('/orgs/{org}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@update']);
Route::delete('/orgs/{org}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@destroy']);
Route::put('/orgs/{org}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@updateColumn']);
Route::get('/filters/orgs/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\orgController@getIndexedColumnsValueWithCount']);
// Routes for the org_teams resource
Route::get('/org_teams/customizers/get_org_team_s9gr7ydkn', ['uses' =>'AltrpControllers\org_teamController@get_org_team_s9gr7ydkn']);
Route::put('/org_teams/customizers/put_org_team_gsq7hnkaj', ['uses' =>'AltrpControllers\org_teamController@put_org_team_gsq7hnkaj']);
Route::post('/org_teams/customizers/add_org_team_xapkdzofu', ['uses' =>'AltrpControllers\org_teamController@add_org_team_xapkdzofu']);
Route::delete('/org_teams/customizers/delete_org_team_rbtu9dmqq', ['uses' =>'AltrpControllers\org_teamController@delete_org_team_rbtu9dmqq']);
Route::get('/org_teams', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@index']);
Route::get('/org_team_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@options']);
Route::post('/org_teams', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@store']);
Route::get('/org_teams/{org_team}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@show']);
Route::put('/org_teams/{org_team}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@update']);
Route::delete('/org_teams/{org_team}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@destroy']);
Route::put('/org_teams/{org_team}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@updateColumn']);
Route::get('/filters/org_teams/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_teamController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_meetings resource
Route::get('/pilot_meetings', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@index']);
Route::get('/pilot_meeting_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@options']);
Route::post('/pilot_meetings', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@store']);
Route::get('/pilot_meetings/{pilot_meeting}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@show']);
Route::put('/pilot_meetings/{pilot_meeting}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@update']);
Route::delete('/pilot_meetings/{pilot_meeting}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@destroy']);
Route::put('/pilot_meetings/{pilot_meeting}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@updateColumn']);
Route::get('/filters/pilot_meetings/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_meetingController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_statuses resource
Route::get('/queries/pilot_statuses/select_pilot_status', ['uses' =>'AltrpControllers\pilot_statusController@select_pilot_status']);
Route::get('/pilot_statuses', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@index']);
Route::get('/pilot_status_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@options']);
Route::post('/pilot_statuses', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@store']);
Route::get('/pilot_statuses/{pilot_status}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@show']);
Route::put('/pilot_statuses/{pilot_status}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@update']);
Route::delete('/pilot_statuses/{pilot_status}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@destroy']);
Route::put('/pilot_statuses/{pilot_status}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@updateColumn']);
Route::get('/filters/pilot_statuses/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_statusController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_galleries resource
Route::get('/pilot_galleries/customizers/get_pilot_gallery_ztb3zagix', ['uses' =>'AltrpControllers\pilot_galleryController@get_pilot_gallery_ztb3zagix']);
Route::put('/pilot_galleries/customizers/put_pilot_gallery_dklajjzyu', ['uses' =>'AltrpControllers\pilot_galleryController@put_pilot_gallery_dklajjzyu']);
Route::post('/pilot_galleries/customizers/add_pilot_gallery_924lc9dm9', ['uses' =>'AltrpControllers\pilot_galleryController@add_pilot_gallery_924lc9dm9']);
Route::delete('/pilot_galleries/customizers/delete_pilot_gallery_juw7kdoio', ['uses' =>'AltrpControllers\pilot_galleryController@delete_pilot_gallery_juw7kdoio']);
Route::get('/pilot_galleries', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@index']);
Route::get('/pilot_gallery_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@options']);
Route::post('/pilot_galleries', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@store']);
Route::get('/pilot_galleries/{pilot_gallery}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@show']);
Route::put('/pilot_galleries/{pilot_gallery}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@update']);
Route::delete('/pilot_galleries/{pilot_gallery}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@destroy']);
Route::put('/pilot_galleries/{pilot_gallery}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@updateColumn']);
Route::get('/filters/pilot_galleries/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_galleryController@getIndexedColumnsValueWithCount']);
// Routes for the handlers resource
Route::get('/handlers/customizers/get_handler_8ckcdx81k', ['uses' =>'AltrpControllers\handlerController@get_handler_8ckcdx81k']);
Route::put('/handlers/customizers/put_handler_4sxn7xx2h', ['uses' =>'AltrpControllers\handlerController@put_handler_4sxn7xx2h']);
Route::post('/handlers/customizers/add_handler_6z36e86ni', ['uses' =>'AltrpControllers\handlerController@add_handler_6z36e86ni']);
Route::delete('/handlers/customizers/delete_handler_mwnzqpijb', ['uses' =>'AltrpControllers\handlerController@delete_handler_mwnzqpijb']);
Route::get('/handlers', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@index']);
Route::get('/handler_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@options']);
Route::post('/handlers', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@store']);
Route::get('/handlers/{handler}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@show']);
Route::put('/handlers/{handler}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@update']);
Route::delete('/handlers/{handler}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@destroy']);
Route::put('/handlers/{handler}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@updateColumn']);
Route::get('/filters/handlers/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handlerController@getIndexedColumnsValueWithCount']);
// Routes for the comments resource
Route::get('/comments', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@index']);
Route::get('/comment_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@options']);
Route::post('/comments', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@store']);
Route::get('/comments/{comment}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@show']);
Route::put('/comments/{comment}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@update']);
Route::delete('/comments/{comment}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@destroy']);
Route::put('/comments/{comment}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@updateColumn']);
Route::get('/filters/comments/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\commentController@getIndexedColumnsValueWithCount']);
// Routes for the comment_startups resource
Route::get('/comment_startups', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@index']);
Route::get('/comment_startup_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@options']);
Route::post('/comment_startups', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@store']);
Route::get('/comment_startups/{comment_startup}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@show']);
Route::put('/comment_startups/{comment_startup}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@update']);
Route::delete('/comment_startups/{comment_startup}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@destroy']);
Route::put('/comment_startups/{comment_startup}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@updateColumn']);
Route::get('/filters/comment_startups/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startupController@getIndexedColumnsValueWithCount']);
// Routes for the comment_pilots resource
Route::get('/comment_pilots', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@index']);
Route::get('/comment_pilot_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@options']);
Route::post('/comment_pilots', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@store']);
Route::get('/comment_pilots/{comment_pilot}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@show']);
Route::put('/comment_pilots/{comment_pilot}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@update']);
Route::delete('/comment_pilots/{comment_pilot}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@destroy']);
Route::put('/comment_pilots/{comment_pilot}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@updateColumn']);
Route::get('/filters/comment_pilots/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_pilotController@getIndexedColumnsValueWithCount']);
// Routes for the flows resource
Route::get('/flows', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@index']);
Route::get('/flow_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@options']);
Route::post('/flows', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@store']);
Route::get('/flows/{flow}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@show']);
Route::put('/flows/{flow}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@update']);
Route::delete('/flows/{flow}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@destroy']);
Route::put('/flows/{flow}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@updateColumn']);
Route::get('/filters/flows/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flowController@getIndexedColumnsValueWithCount']);
// Routes for the flow_types resource
Route::get('/queries/flow_types/select_flow_type', ['uses' => 'AltrpControllers\flow_typeController@select_flow_type']);
Route::get('/flow_types', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@index']);
Route::get('/flow_type_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@options']);
Route::post('/flow_types', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@store']);
Route::get('/flow_types/{flow_type}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@show']);
Route::put('/flow_types/{flow_type}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@update']);
Route::delete('/flow_types/{flow_type}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@destroy']);
Route::put('/flow_types/{flow_type}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@updateColumn']);
Route::get('/filters/flow_types/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\flow_typeController@getIndexedColumnsValueWithCount']);
// Routes for the favorites resource
Route::get('/favorites', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@index']);
Route::get('/favorite_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@options']);
Route::post('/favorites', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@store']);
Route::get('/favorites/{favorite}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@show']);
Route::put('/favorites/{favorite}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@update']);
Route::delete('/favorites/{favorite}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@destroy']);
Route::put('/favorites/{favorite}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@updateColumn']);
Route::get('/filters/favorites/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\favoriteController@getIndexedColumnsValueWithCount']);
// Routes for the user_alts resource
Route::post('/user_alts/customizers/registration_2pjbgi5ly', ['uses' =>'AltrpControllers\user_altController@registration_2pjbgi5ly']);
Route::get('/user_alts', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@index']);
Route::get('/user_alt_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@options']);
Route::post('/user_alts', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@store']);
Route::get('/user_alts/{user_alt}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@show']);
Route::put('/user_alts/{user_alt}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@update']);
Route::delete('/user_alts/{user_alt}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@destroy']);
Route::put('/user_alts/{user_alt}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@updateColumn']);
Route::get('/filters/user_alts/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\user_altController@getIndexedColumnsValueWithCount']);
// Routes for the media_alts resource
Route::get('/media_alts', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@index']);
Route::get('/media_alt_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@options']);
Route::post('/media_alts', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@store']);
Route::get('/media_alts/{media_alt}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@show']);
Route::put('/media_alts/{media_alt}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@update']);
Route::delete('/media_alts/{media_alt}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@destroy']);
Route::put('/media_alts/{media_alt}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@updateColumn']);
Route::get('/filters/media_alts/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\media_altController@getIndexedColumnsValueWithCount']);
// Routes for the startup_news resource
Route::get('/startup_news/customizers/get_startup_news_uckhuoxnl', ['uses' =>'AltrpControllers\startup_newsController@get_startup_news_uckhuoxnl']);
Route::put('/startup_news/customizers/put_startup_news_o6gf9y8pt', ['uses' =>'AltrpControllers\startup_newsController@put_startup_news_o6gf9y8pt']);
Route::post('/startup_news/customizers/add_startup_news_taq923xpf', ['uses' =>'AltrpControllers\startup_newsController@add_startup_news_taq923xpf']);
Route::delete('/startup_news/customizers/delete_startup_news_huv0nzoj5', ['uses' =>'AltrpControllers\startup_newsController@delete_startup_news_huv0nzoj5']);
Route::get('/startup_news', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@index']);
Route::get('/startup_news_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@options']);
Route::post('/startup_news', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@store']);
Route::get('/startup_news/{startup_news}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@show']);
Route::put('/startup_news/{startup_news}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@update']);
Route::delete('/startup_news/{startup_news}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@destroy']);
Route::put('/startup_news/{startup_news}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@updateColumn']);
Route::get('/filters/startup_news/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\startup_newsController@getIndexedColumnsValueWithCount']);
// Routes for the comment_startup_news resource
Route::get('/comment_startup_news', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@index']);
Route::get('/comment_startup_news_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@options']);
Route::post('/comment_startup_news', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@store']);
Route::get('/comment_startup_news/{comment_startup_news}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@show']);
Route::put('/comment_startup_news/{comment_startup_news}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@update']);
Route::delete('/comment_startup_news/{comment_startup_news}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@destroy']);
Route::put('/comment_startup_news/{comment_startup_news}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@updateColumn']);
Route::get('/filters/comment_startup_news/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\comment_startup_newsController@getIndexedColumnsValueWithCount']);
// Routes for the handler_histories resource
Route::get('/handler_histories', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@index']);
Route::get('/handler_history_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@options']);
Route::post('/handler_histories', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@store']);
Route::get('/handler_histories/{handler_history}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@show']);
Route::put('/handler_histories/{handler_history}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@update']);
Route::delete('/handler_histories/{handler_history}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@destroy']);
Route::put('/handler_histories/{handler_history}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@updateColumn']);
Route::get('/filters/handler_histories/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\handler_historyController@getIndexedColumnsValueWithCount']);
// Routes for the pilot_files resource
Route::get('/pilot_files', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@index']);
Route::get('/pilot_file_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@options']);
Route::post('/pilot_files', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@store']);
Route::get('/pilot_files/{pilot_file}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@show']);
Route::put('/pilot_files/{pilot_file}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@update']);
Route::delete('/pilot_files/{pilot_file}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@destroy']);
Route::put('/pilot_files/{pilot_file}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@updateColumn']);
Route::get('/filters/pilot_files/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\pilot_fileController@getIndexedColumnsValueWithCount']);
// Routes for the count_people resource
Route::get('/queries/count_people/select_count_person', ['uses' => 'AltrpControllers\count_personController@select_count_person']);
Route::get('/count_people', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@index']);
Route::get('/count_person_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@options']);
Route::post('/count_people', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@store']);
Route::get('/count_people/{count_person}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@show']);
Route::put('/count_people/{count_person}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@update']);
Route::delete('/count_people/{count_person}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@destroy']);
Route::put('/count_people/{count_person}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@updateColumn']);
Route::get('/filters/count_people/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\count_personController@getIndexedColumnsValueWithCount']);
// Routes for the org_branches resource
Route::get('/org_branches', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@index']);
Route::get('/org_branch_options', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@options']);
Route::post('/org_branches', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@store']);
Route::get('/org_branches/{org_branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@show']);
Route::put('/org_branches/{org_branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@update']);
Route::delete('/org_branches/{org_branch}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@destroy']);
Route::put('/org_branches/{org_branch}/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@updateColumn']);
Route::get('/filters/org_branches/{column}', ['middleware' => ['auth','role:admin'], 'uses' =>'AltrpControllers\org_branchController@getIndexedColumnsValueWithCount']);