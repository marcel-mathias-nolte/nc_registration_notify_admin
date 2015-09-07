<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   NC Registration Admin Notification 
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2013
 * @website	  https://www.noltecomputer.com
 * @license   <marcel.nolte@noltecomputer.de> wrote this file. As long as you retain this notice you
 *            can do whatever you want with this stuff. If we meet some day, and you think this stuff 
 *            is worth it, you can buy me a beer in return. Meanwhile you can provide a link to my
 *            homepage, if you want, or send me a postcard. Be creative! Marcel Mathias Nolte
 */


/**
 *  Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_registration_notify_admin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_registration_notify_admin'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => 'char(1) NOT NULL default \'\''
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_registration_notify_admin_alternate_recipient'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_registration_notify_admin_alternate_recipient'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => 'char(1) NOT NULL default \'\''
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_registration_notify_admin_alternate_recipients'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_registration_notify_admin_alternate_recipients'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class' => 'long'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_registration_notify_admin_subject'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_registration_notify_admin_subject'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class' => 'long'),
	'load_callback' => array
	(
		array('tl_module_registration_notify_administrator', 'getRegistrationDefaultText')
	),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_registration_notify_admin_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_registration_notify_admin_text'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
	'load_callback' => array
	(
		array('tl_module_registration_notify_administrator', 'getRegistrationDefaultText')
	),
	'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_activation_notify_admin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_activation_notify_admin'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => 'char(1) NOT NULL default \'\''
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_activation_notify_admin_alternate_recipient'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_activation_notify_admin_alternate_recipient'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => 'char(1) NOT NULL default \'\''
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_activation_notify_admin_alternate_recipients'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_activation_notify_admin_alternate_recipients'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class' => 'long'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_activation_notify_admin_subject'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_activation_notify_admin_subject'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class' => 'long'),
	'load_callback' => array
	(
		array('tl_module_registration_notify_administrator', 'getActivationDefaultText')
	),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['nc_activation_notify_admin_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nc_activation_notify_admin_text'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
	'load_callback' => array
	(
		array('tl_module_registration_notify_administrator', 'getActivationDefaultText')
	),
	'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'nc_registration_notify_admin';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'nc_registration_notify_admin_alternate_recipient';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['nc_registration_notify_admin'] = 'nc_registration_notify_admin_subject,nc_registration_notify_admin_text,nc_registration_notify_admin_alternate_recipient';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['nc_registration_notify_admin_alternate_recipient'] = 'nc_registration_notify_admin_alternate_recipients';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'nc_activation_notify_admin';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'nc_activation_notify_admin_alternate_recipient';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['nc_activation_notify_admin'] = 'nc_activation_notify_admin_subject,nc_activation_notify_admin_text,nc_activation_notify_admin_alternate_recipient';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['nc_activation_notify_admin_alternate_recipient'] = 'nc_activation_notify_admin_alternate_recipients';

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('tl_module_registration_notify_administrator', 'extendPalettes');

/**
 * Class tl_module_registration_notify_administrator
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_registration_notify_administrator extends Backend
{

	/**
	 * Initialization and necessary imports
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}
	
	/**
	 * Extend the default palettes
	 * @param string
	 */
	public function extendPalettes($strName)
	{
		if ($strName != 'tl_module')
		{
			return;
		}
		$GLOBALS['TL_DCA']['tl_module']['palettes']['registration'] = str_replace(',reg_activate', ',reg_activate,nc_registration_notify_admin,nc_activation_notify_admin', $GLOBALS['TL_DCA']['tl_module']['palettes']['registration']);
	}

	/**
	 * Load the default registration mail text
	 * @param mixed
	 * @return mixed
	 */
	public function getRegistrationDefaultText($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = $GLOBALS['TL_LANG']['MSC']['registration_notify_admin_text'];
		}
		return $varValue;
	}

	/**
	 * Load the default activation mail text
	 * @param mixed
	 * @return mixed
	 */
	public function getActivationDefaultText($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = $GLOBALS['TL_LANG']['MSC']['activation_notify_admin_text'];
		}
		return $varValue;
	}
}