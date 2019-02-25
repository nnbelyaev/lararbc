<?php

namespace App\Providers;

use App\Rubric;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
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
        return Rubric::all();
    }
}
