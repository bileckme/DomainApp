<?php namespace Domain\App;

use Illuminate\Support\ServiceProvider;

/**
 * Class DomainAppServiceProvider
 * @package Domain\App
 */
class DomainAppServiceProvider extends ServiceProvider
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
        $this->package('domain/app');

        $this->setApplication();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['app'];
    }

    /**
     * Gets Laravel Application instance
     * @return \Illuminate\Foundation\Application
     */
    protected function getApp()
    {
        return $this->app;
    }

    /**
     * Sets database connection
     */
    protected function setApp($app)
    {
        $this->setApplication($app);
    }

    /**
     *
     * @param $application
     */
    private function setApplication($application)
    {
        // TODO: set default application
    }
}
