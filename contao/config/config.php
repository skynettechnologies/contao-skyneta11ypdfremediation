<?php

/**
 * skyneta11ypdfremediation extension for Contao Open Source CMS
 *
 * Cleaned-up version: Display AI-powered PDF accessibility remediation - upload PDFs, scan website PDFs, and download remediated files. in the backend module
 *
 * @author Skynet Technologies USA LLC
 * @license LGPL
 */

/**
 * Backend module
 * This registers the menu in Contao backend and shows HTML content via a callback
 */

$GLOBALS['BE_MOD']['system']['skyneta11ypdfremediation'] = [
    'callback' => 'Skynettechnologies\ContaoSkynetA11yPdfRemediation\Controller\BackendModule\SkynetA11yPdfRemediationModule'
];
