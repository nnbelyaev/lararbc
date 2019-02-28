<?php

namespace App\Repositories;

interface PublicationRepository {

    public function getNewsTopnews(int $list_id);

    public function getFeedLast(int $list_id, int $limit);

}

