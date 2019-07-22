<?php

namespace App\Http\Vendor\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Vendor\Classes\SaveInDatabaseClass;
use App\Http\Vendor\Classes\SaveInFileClass;

class SaveDataServiceProvider extends ServiceProvider
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
        $this->app->singleton('App\Http\Vendor\Interfaces\SaveDataInterface', function() {

            switch(env('SAVER_DRIVER')) {
                case 'database':
                    return new SaveInDatabaseClass();
                    break;
                case 'file':
                    return new SaveInFileClass();
                    break;
            }

        });
    }
}
