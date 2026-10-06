<?php

namespace Skynettechnologies\ContaoSkynetA11yPdfRemediation\Controller\BackendModule;

use Contao\BackendModule;
       
class SkynetA11yPdfRemediationModule extends BackendModule
{
    protected $strTemplate = 'be_skyneta11ypdfremediation';

    protected function compile(): void
    {
     
        $this->Template->title = 'SkynetA11y PDF Remediation';

    }
}