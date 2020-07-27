<?php

namespace Edgard\Container;

class Application
{
    /**
     * @var Container
     */
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            $provider = new $provider($this->container);
            $provider->register();
        }
    }
}
