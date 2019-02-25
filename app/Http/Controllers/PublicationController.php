<?php

namespace App\Http\Controllers;

use App\Rubric;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function show(Rubric $rubric, $publication) {
        return $publication;
    }
}
