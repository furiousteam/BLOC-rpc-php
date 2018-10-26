<?php

namespace Tests;

use BLOC\BlocService;

class ConfigureBlocServiceTest extends TestCase
{
    public function testConfigureDefaultValues()
    {
        $blocService = new BlocService();
        $blocService->configure([]);
        $this->assertEquals([
            'rpcHost'      => 'http://127.0.0.1',
            'rpcPort'      => 8070,
            'rpcPassword'  => 'test',
            'rpcBaseRoute' => '/json_rpc',
        ], $blocService->config());
    }

    public function testConfigureAllValues()
    {
        $blocService = new BlocService();
        $blocService->configure([
            'rpcHost'      => 'https://192.168.10.10',
            'rpcPort'      => 8080,
            'rpcPassword'  => 'testing',
            'rpcBaseRoute' => '/api/v1',
        ]);

        $this->assertEquals([
            'rpcHost'      => 'https://192.168.10.10',
            'rpcPort'      => 8080,
            'rpcPassword'  => 'testing',
            'rpcBaseRoute' => '/api/v1',
        ], $blocService->config());
    }

    public function testConfigureViaConstructor()
    {
        $blocService = new BlocService([
            'rpcHost'      => 'https://192.168.10.10',
            'rpcPort'      => 8080,
            'rpcPassword'  => 'testing',
            'rpcBaseRoute' => '/api/v1',
        ]);

        $this->assertEquals([
            'rpcHost'      => 'https://192.168.10.10',
            'rpcPort'      => 8080,
            'rpcPassword'  => 'testing',
            'rpcBaseRoute' => '/api/v1',
        ], $blocService->config());
    }

    public function testConfigureDoesntOverwriteOtherVariables()
    {
        $blocService = new BlocService();
        $blocService->configure([
            'client' => 'should not be able to set this value',
        ]);

        $this->assertNotEquals($blocService->client(), 'should not be able to set this value');
    }
}