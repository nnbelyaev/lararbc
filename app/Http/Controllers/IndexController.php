<?php

namespace App\Http\Controllers;

use App\Rubric;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        //$rubrics = Rubric::all()->keyBy('translit');
        //return $rubrics;

        return view('main');
    }
}
