<?php

namespace SAS\Dashboard\Http\Controllers;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Parsedown;
use Seat\Web\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package SAS\Dashboard\Http\Controllers
 */

class DashboardController extends Controller {
  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function getHome() {
    return view('dashboard::home');
  }
}
