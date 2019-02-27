<?php

namespace App\Repositories;

use Illuminate\Contracts\Cache\Repository as Cache;

class CachingPublicationRepository implements PublicationRepository
{
    private $repository;
    private $cache;

    public function __construct(PublicationRepository $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }

    public function getNewsTopnews(int $list_id)
    {
        $res = $this->cache->tags(['publications', 'topnews'])->rememberForever('publication.topnews.'.md5(serialize(func_get_args())).'.'.app()->getLocale(), function() use ($list_id) {
            return $this->repository->getNewsTopnews($list_id);
        });
        return $res;
    }
}