<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @author Nico Ziegler <https://github.com/gruenerPetz>
 * @package gp
 * @license LGPL-3.0+
 */

/**
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'gp_add_sponsor_popup';
$GLOBALS['TL_DCA']['tl_content']['palettes']['gp_sponsor'] = '{type_legend},type,headline;{source_legend},singleSRC;{image_legend},alt,title,size,imagemargin;{gp_popup_legend},gp_add_sponsor_popup;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['gp_add_sponsor_popup'] = 'gp_popup_size,gp_sponsor_name,gp_sponsor_address_1,gp_sponsor_address_2,gp_sponsor_address_3,gp_sponsor_contact,gp_sponsor_email,gp_sponsor_url,gp_sponsor_information';


$GLOBALS['TL_DCA']['tl_content']['fields']['gp_add_sponsor_popup'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_add_sponsor_popup'],
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_popup_size'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_popup_size'],
	'inputType'               => 'imageSize',
	'options'                 => System::getImageSizes(),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_name'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_address_1'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_address_1'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'					  => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_address_2'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_address_2'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'					  => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_address_3'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_address_3'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_contact'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_contact'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'					  => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_email'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_email'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'					  => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_url'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_url'],
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['gp_sponsor_information'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gp_sponsor_information'],
	'inputType'               => 'textarea',
	'eval'                    => array('rte'=>'tinyMCE', 'helpwizard'=>true),
	'explanation'             => 'insertTags',
	'sql'                     => "mediumtext NULL"
);