<?php

namespace App\Providers;

use App\Helpers\DataHelper;
use Illuminate\Support\ServiceProvider;
use App\Repositories\DbRubricRepository;
use App\Repositories\DbPublicationRepository;
use App\Repositories\CachingRubricRepository;
use App\Repositories\CachingPublicationRepository;
use Illuminate\Database\Eloquent;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('RubricRepository', function () {
            return new CachingRubricRepository(
                new DbRubricRepository,
                $this->app['cache.store']
            );
        });
        $this->app->singleton('PublicationRepository', function () {
            return new CachingPublicationRepository(
                new DbPublicationRepository,
                $this->app['cache.store']
            );
        });
        $this->app->singleton('DataHelper', function () {
            return new DataHelper();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->composer('*', function ($view) {
            $view->with('bannerKeywords', $this->app->get('DataHelper')->getBannerKeywords());
            $view->with('lang', \App::getLocale());
        });
        $this->composeRubricCollection();
    }

    private function composeRubricCollection() {
        $this->app['view']->composer('*', function($view) {
            $view->with('rubricsDict', $this->getRubricsDict());
        });
    }
    public function getRubricsDict() {
        return $this->app->get('RubricRepository')->getRubricDict();
    }
}
