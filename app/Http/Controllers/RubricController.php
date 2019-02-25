<?php

namespace App\Http\Controllers;

use App\Rubric;
use Illuminate\Http\Request;

class RubricController extends Controller
{
    public function index(Rubric $rubric) {
        return $rubric;
    }

    public function listing(Rubric $rubric, $page) {
        return 'rubric.listing here with page '.$page.' on rubric '.$rubric->name_ru;
    }
}
