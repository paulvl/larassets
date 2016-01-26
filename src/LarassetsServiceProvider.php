<?php

namespace Paulvl\Larassets;

use Illuminate\Support\ServiceProvider;
use Collective\Html\HtmlFacade as Html;

class LarassetsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/assets' => public_path('assets'),
        ], 'larassets');

        $this->publishes([
            __DIR__.'/custom' => public_path('custom'),
        ], 'custom-larassets');

        $this->loadViewsFrom(__DIR__.'/views', 'larassets');

        Html::component('googleFont', 'larassets::assets.google-font', ['font' => 'Roboto', 'sizes' => '100,300,400,700']);
        Html::component('bootstrapAsset', 'larassets::assets.bootstrap', ['type' => 'css', 'version' => '3.3.6', 'theme' => null]);
        Html::component('jqueryAsset', 'larassets::assets.jquery', ['version' => '2.2.0']);
        Html::component('fontAwesomeAsset', 'larassets::assets.font-awesome', ['version' => '4.5.0']);
        Html::component('customAsset', 'larassets::custom.custom', ['type' => 'css']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}