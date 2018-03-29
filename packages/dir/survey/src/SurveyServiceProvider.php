<?php
/**
 * Created by PhpStorm.
 * User: Naveed Anwar
 * Date: 24/03/2018
 * Time: 04:19 PM
 */


namespace Survey;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider{

    public function boot() {
            Schema::defaultStringLength(191);
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/../resources/views','survey');
    }

    public function register() {
        $this->registerPublishes();
    }
    public function registerPublishes(){
            $base = dirname(__DIR__);

        $arrPublish = [
            'migrations' => [
                "$base/publishable/database/migrations" => database_path('migrations'),
            ]
        ];

        foreach($arrPublish as $group => $paths) {
            $this->publishes($paths,$group);
        }
    }
}

