<?php

namespace Skynettechnologies\ContaoSkynetA11yPdfRemediation;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ContaoSkynetA11yPdfRemediationBundle extends AbstractBundle
{
    public function loadExtension(
        array $config,
        ContainerConfigurator $container,
        ContainerBuilder $builder
    ): void
    {
        $container->import('../config/services.yaml');
    }
}
