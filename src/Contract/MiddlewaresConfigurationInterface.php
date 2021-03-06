<?php

namespace Upgate\LaravelJsonRpc\Contract;

interface MiddlewaresConfigurationInterface
{

    /**
     * @param MiddlewareAliasRegistryInterface|null $aliases
     * @return $this
     */
    public function setMiddlewareAliases(MiddlewareAliasRegistryInterface $aliases = null);

    /**
     * @return string[]
     */
    public function getMiddlewares();

    /**
     * @return bool
     */
    public function isEmpty();

    /**
     * @param array $middlewares
     * @return $this
     */
    public function setMiddlewares(array $middlewares = []);

    /**
     * @param string $middleware
     * @return $this
     */
    public function addMiddleware($middleware);

}