<?php namespace KamranAhmed\LaravelCensor;

use App;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class LaravelCensorServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    protected $package = 'kamranahmedse/laravel-censor';

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/censor.php' => '/var/www/wanuq-api/config/censor.php'
            ], 'config');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('taobaotop');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/censor.php', 'censor');
    }

}
