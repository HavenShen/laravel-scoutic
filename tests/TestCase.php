<?php
namespace Tests;

/**
 * TestCase
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    protected $signatue;
    protected $baseUrl;
    protected $webRoute;
    protected $apiRoute;
    protected $config;
    protected $applicationMock;
    protected $serviceProvider;
    protected function resolveApplicationConfiguration($app)
    {
        parent::resolveApplicationConfiguration($app);
        // if (empty($this->config)) {
        //     $this->config = require __DIR__.'/../config/larsign.php';
        // }
        // $app['config']->set('larsign', $this->config);
        $app['config']['scout']['elasticsearch'] = [
            'hosts' => 'http://localhost'
        ];
    }
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            Laravel\Scout\ScoutServiceProvider::class,
            HavenShen\Laravel\Scoutic\ScouticProvider::class,
        ];
    }
    protected function getPackageAliases($app)
    {
        return [
            // ...
        ];
    }
    public function getEnvironmentSetUp($app)
    {
        //
    }

}