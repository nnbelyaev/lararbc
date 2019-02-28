<?php

namespace App\Repositories;

use App\Publication;
use Illuminate\Support\Facades\DB;

class DbPublicationRepository implements PublicationRepository
{
    public function getNewsTopnews(int $list_id)
    {
        $locale  = app()->getLocale();
        $rows = DB::table('publications_top as POS')
            ->join('publications as PUB', 'POS.publication_id', '=', 'PUB.id')
            ->join('publication_letters as TXT', function ($join) use ($locale) {
                $join->on('TXT.publication_id', '=', 'PUB.id');
                $join->where('TXT.locale', '=', $locale);
            })
            ->where('POS.list_id', '=', $list_id)
            ->where('POS.position', '<', 10)
            ->orderBy('POS.position', 'ASC')
            ->get(array('PUB.*', 'TXT.*'));

        return $rows;
    }

    public function getFeedLast(int $list_id, int $limit)
    {
        return ['xxx'];
    }
}


