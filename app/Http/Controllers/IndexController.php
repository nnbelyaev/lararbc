<?php

namespace App\Http\Controllers;

use App\Rubric;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $rubrics = app()->get('RubricRepository')->getRubricDict();

        return view('main');
    }
}
