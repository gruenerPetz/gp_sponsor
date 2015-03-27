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

namespace Gp;

use Contao\ContentImage;

/**
 * Front end content element "addressPopup".
 *
 * @author Nico Ziegler <https://github.com/gruenerPetz>
 */
class ContentSponsor extends ContentImage
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_gp_sponsor';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if ($this->arrData['gp_sponsor_email'])
		{
			$this->arrData['gp_sponsor_email'] = \String::encodeEmail($this->arrData['gp_sponsor_email']);
		}

		if ($this->arrData['gp_sponsor_url'])
		{
			if (strncmp($this->arrData['gp_sponsor_url'], 'http://', 7) !== 0 || strncmp($this->arrData['gp_sponsor_url'], 'https://', 8) !== 0)
			{
				$this->arrData['gp_sponsor_url'] = ampersand('http://' . $this->gp_sponsor_url);
			}
		}

		$this->addImageToTemplate($this->Template, $this->arrData);

		$objTemplate = new \FrontendTemplate('ce_gp_sponsor_popup');
		$objTemplate->setData($this->arrData);

		$this->addImageToTemplate($objTemplate, array(
			'singleSRC' => $this->arrData['singleSRC'],
			'size' => $this->arrData['gp_popup_size'],
		));

		$this->Template->popup = $objTemplate->parse();

		$GLOBALS['TL_JQUERY'][] = '<script>(function($){$(document).ready(function(){$("a.cboxElement.inline").map(function(){$(this).colorbox({inline:true,href:$(this).attr("href"),maxWidth:"95%",maxHeight:"95%"});});});})(jQuery);</script>';
	}
}
