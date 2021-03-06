<?php

namespace Upgate\LaravelJsonRpc\Contract;

interface RouteRegistryInterface
{

    /**
     * @param array|string $middleware
     * @return $this
     */
    public function addMiddleware($middleware);

    /**
     * @param MiddlewareAliasRegistryInterface|null $aliases
     * @return $this
     */
    public function setMiddlewareAliases(MiddlewareAliasRegistryInterface $aliases = null);

    /**
     * @param string $method
     * @param string $binding
     * @return $this
     */
    public function bind($method, $binding);

    /**
     * @param string $namespace
     * @param string $controller
     * @return $this
     */
    public function bindController($namespace, $controller);

    /**
     * @param callable|array|string|null $middlewaresConfigurator
     * @param callable $routesConfigurator
     * @return $this
     */
    public function group($middlewaresConfigurator = null, callable $routesConfigurator);

    /**
     * @param string $method
     * @return RouteInterface
     */
    public function resolve($method);

}