<?php

namespace App\DependencyInjection;

use Symfony\Component\DependencyInjection\EnvVarLoaderInterface;

class ConsulEnvVarLoader implements EnvVarLoaderInterface
{
    public function loadEnvVars(): array
    {
        throw new \Exception('I cannot connect to Consul when you clear cache');
    }
}
