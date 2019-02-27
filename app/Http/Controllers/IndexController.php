<?php

namespace App\Http\Controllers;

use App\Rubric;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        //\Cache::tags('rubrics')->flush();

        return view('main');
    }
}
