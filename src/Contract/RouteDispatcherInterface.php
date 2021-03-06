<?php

namespace Upgate\LaravelJsonRpc\Contract;

use Upgate\LaravelJsonRpc\Server\RequestParams;

interface RouteDispatcherInterface
{

    /**
     * @param RouteInterface $route
     * @param RequestParams $requestParams
     * @return mixed
     */
    public function dispatch(RouteInterface $route, RequestParams $requestParams = null);

    /**
     * @param string|null $controllerNamespace
     * @return $this
     */
    public function setControllerNamespace($controllerNamespace = null);

}