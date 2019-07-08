<?php

namespace Seat\SAS\Dashboard\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Parsedown;
use Seat\Web\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package Seat\SAS\Dashboard\Http\Controllers
 */

class DashboardController extends Controller {
  public function getHome() {
    return view('dashboard::home.index');
  }

  public function getKnowledgeBase() {
    return view('dashboard::kb.index');
  }
}
