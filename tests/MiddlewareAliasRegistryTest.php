<?php

use Upgate\LaravelJsonRpc\Server\MiddlewareAliasRegistry;
use Upgate\LaravelJsonRpc\Contract\MiddlewaresConfigurationInterface;

class MiddlewareAliasRegistryTest extends PHPUnit_Framework_TestCase
{

    public function testMiddlewareAliasResolver()
    {
        /** @var MiddlewaresConfigurationInterface $middlewaresConfiguration */

        $middlewareAliasRegistry = new MiddlewareAliasRegistry();
        $middlewareAliasRegistry->registerAliases(
            [
                'foo' => 'FooMiddleware',
                'baz' => 'BazMiddleware'
            ]
        );

        $this->assertEquals('FooMiddleware', $middlewareAliasRegistry->findNameByAlias('foo'));
        $this->assertNull($middlewareAliasRegistry->findNameByAlias('does_not_exist'));

        $this->assertEquals(
            ['FooMiddleware', 'BarMiddleware', 'BazMiddleware'],
            $middlewareAliasRegistry->resolveAliases(['foo', 'BarMiddleware', 'baz'])
        );
    }

}
