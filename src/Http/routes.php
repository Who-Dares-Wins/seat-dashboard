<?php

Route::group([
  'namespace' => 'SAS\Dashboard\Http\Controllers',
  'prefix' => 'dashboard'
], function() {
  Route::group([
    'middleware' => ['web', 'auth', 'locale'],
  ], function() {
    Route::get('/home', [
      'as' => 'dashboard.home',
      'uses' => 'DashboardController@getHome',
    ]);
  });
});
