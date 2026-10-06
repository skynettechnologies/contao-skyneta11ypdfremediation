<?php
namespace Skynettechnologies\ContaoSkynetA11yPdfRemediation\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Skynettechnologies\ContaoSkynetA11yPdfRemediation\ContaoSkynetA11yPdfRemediationBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoSkynetA11yPdfRemediationBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
