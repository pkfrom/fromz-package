<?php

namespace Fromz\FromzPackage;

use Illuminate\Support\ServiceProvider;

class FromzServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
	protected $packageName = 'fromz';
    
    public function boot()
    {
        $this->loadViews();

        $this->publishConfig();

        $this->publishAssets();	
    }


        // Register Views from your package
    private function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/views', $this->packageName);

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/fromz'),
        ]);
	}

        // Register your asset's publisher
    private function publishAssets()
    {
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/'.$this->packageName),
        ], 'public');
    }

    private function publishConfig()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('fromz.php'),
        ],'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFromzCommand();

        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'fromz'
        );
    }

    private function registerFromzCommand()
	{
		$this->app->singleton('command.larascaf.scaffold', function ($app) {
			return $app['Fromz\Fromz\Commands\ScaffoldMakeCommand'];
		});

		$this->commands('command.larascaf.scaffold');
	}
}
