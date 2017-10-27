<?php
namespace Domain\App;
/**
 * Class Application
 * @package Domain\App
 */
abstract class Application
{
    /**
     * @var App
     */
    protected $app;

    /**
     * Gets the application instance
     */
    abstract public function instance();

    /**
     * Runs the application
     */
    abstract public function run();


    protected function requires(){
        require 'vendor/autoload.php';
    }

    /**
     * @param string $uri
     * @return mixed
     */
    public function get($uri='/hello/{name}')
    {
        return $this->app->get($uri, function (Request $request, Response $response, $name) {
            return $response->write('Hello, ' . $name);
        });
    }
}

