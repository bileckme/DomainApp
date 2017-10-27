<?php namespace Domain\App;

use Slim\App;
use League\Container\Container;
use League\Container\ReflectionContainer;
use Jenssegers\Lean\SlimServiceProvider;

/**
 * Class SlimApplication
 * @package Domain\App
 */
class SlimApplication extends Application
{
    /**
     * Gets the application instance
     * @return App
     */
    public function instance()
    {
        $this->requires();
        $container = new Container;
        $container->delegate(new ReflectionContainer);
        $container->addServiceProvider(new SlimServiceProvider);

        $this->app = new App($container);
        return $this->app;
    }

    /**
     * Runs the application
     */
    public function run()
    {
        $this->app->run();
    }
}