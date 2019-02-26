<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\DbRubricRepository;
use App\Repositories\CachingRubricRepository;
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
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->composer('*', function ($view) {
            $view->with('lang', \App::getLocale());
        });
        $this->composeRubricCollection();
    }

    private function composeRubricCollection() {
        view()->composer('main', function($view) {
            $view->with('rubricsDict', $this->getRubricsDict());
        });
    }
    public function getRubricsDict() {
        return $this->app->get('RubricRepository')->getRubricDict();
    }
}
