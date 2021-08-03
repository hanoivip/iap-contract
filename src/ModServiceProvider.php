<?php

namespace Hanoivip\IapContract;

use Illuminate\Support\ServiceProvider;

class ModServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->commands([
        ]);
        $this->app->bind("IapService", function ($app, $cfg) {
            $inprocess = !config('iap.standalone', false);
            if ($inprocess)
            {
                return $this->app->make('LocalIapService');
            }
            else
            {
                return new IapProxy();
            }
        });
    }
}
