<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   WoWSuite 
 * @author    Sebastian Hauck 
 * @license   GNU/LGPL 
 * @copyright Sebastian Hauck 2012 
 */


/**
 * Namespace
 */
namespace WoWSuite;


/**
 * Class test 
 *
 * @copyright  Sebastian Hauck 2012 
 * @author     Sebastian Hauck 
 * @package    Devtools
 */
class test extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_test';
	
	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### TestApi Modul ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
			return $objTemplate->parse();
		}
	
		return parent::generate();
	}

	/**
	 * Generate the module
	 */
	protected function compile()
	{
		$this->import('\battlenetAPI\ApiController','BNAPI');
		//var_dump($this->BNAPI->getCharacterData());
		$this->Template->test = print_r($this->BNAPI->getCharacterData(),true);
		//$this->Template->test = 'test';
	}
}
