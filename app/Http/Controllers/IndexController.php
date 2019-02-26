<?php

namespace App\Http\Controllers;

use App\Rubric;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $cache = new \Memcached();
        $cache->addServer('localhost', '11211');

        return view('main');
    }
}
