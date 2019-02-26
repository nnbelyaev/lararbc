<?php

namespace App\Repositories;

use Illuminate\Contracts\Cache\Repository as Cache;

class CachingRubricRepository implements RubricRepository
{
    private $repository;
    private $cache;

    public function __construct(RubricRepository $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }

    public function getRubricDict()
    {
        return $this->cache->remember('rubrics.dict', 30, function() {
            return $this->repository->getRubricDict();
        });
    }
}