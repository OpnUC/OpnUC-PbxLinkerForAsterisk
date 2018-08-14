<?php

namespace OpnUC\PbxLinkerForAsterisk;

use Illuminate\Support\ServiceProvider;

class PbxLinkerServiceProvider extends \App\Providers\PbxLinkerServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

        \App\Facades\PbxLinker::extend('Asterisk', function($app)
        {
            return new AsteriskLinker();
        });

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        parent::register();

        // 既存のConfigにマージする
        $this->mergeConfigFrom(
            $this->configPath(), 'opnuc.pbx_linker.asterisk'
        );

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [PbxLinkerServiceProvider::class];
    }

    protected  function configPath(){

        return __DIR__ . '/../config/opnuc.php';

    }
}