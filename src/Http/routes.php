<?php

Route::group([
  'namespace' => 'Seat\SAS\Dashboard\Http\Controllers',
  'prefix' => 'dashboard'
], function() {
  Route::group([
    'middleware' => ['web', 'auth', 'locale'],
  ], function() {
    Route::group([
      'middleware' => 'bouncer:dashboard.view',
    ], function () {
      Route::get('/home', [
        'as' => 'dashboard.home',
        'uses' => 'DashboardController@getHome',
      ]);

      Route::get('/kb', [
        'as' => 'dashboard.kb',
        'uses' => 'DashboardController@getKnowledgeBase',
      ]);
    });
  });
});
