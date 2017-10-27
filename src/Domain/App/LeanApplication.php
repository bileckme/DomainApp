<?php namespace Domain\App;
use Jenssegers\Lean\App;
/**
 * Class LeanApplication
 * @package Domain\App
 */
class LeanApplication extends Application
{
    /**
     * Gets the application instance
     * @return App
     */
    public function instance()
    {
        $this->requires();
        $this->app = new App();
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