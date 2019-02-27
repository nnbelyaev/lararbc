<?php

namespace App\Repositories;

use App\Publication;

class DbPublicationRepository implements PublicationRepository
{
    public function getNewsTopnews() {
        return [1,2,3];
    }
}


