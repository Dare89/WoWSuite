<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Wowsuite
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'WoWSuite',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'WoWSuite\test' => 'system/modules/wowsuite/modules/test.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_test' => 'system/modules/wowsuite/templates',
	'test'     => 'system/modules/wowsuite/templates',
));
