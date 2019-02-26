<?php

namespace App\Repositories;

use App\Rubric;

class DbRubricRepository implements RubricRepository
{
    public function getRubricDict() {
        return Rubric::all();
    }
}


