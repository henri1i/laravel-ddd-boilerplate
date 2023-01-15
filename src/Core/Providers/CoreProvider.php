<?php


namespace Main\Core\Providers;


use Main\Core\Classes\DomainManager;
use Illuminate\Support\ServiceProvider;

class CoreProvider extends ServiceProvider
{

    public function register()
    {
        $providers = DomainManager::instance()->getproviders();
        foreach ($providers as $provider){
            $this->app->register($provider);
        }
    }

}
