<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Gp',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Gp\ContentSponsor' => 'system/modules/gp_sponsor/elements/ContentSponsor.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_gp_sponsor'       => 'system/modules/gp_sponsor/templates/elements',
	'ce_gp_sponsor_popup' => 'system/modules/gp_sponsor/templates/elements',
));
