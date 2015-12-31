<?php
/**
 * @copyright	Copyright © 2015 - All rights reserved.
 * @license		Copyrighted Commercial Software
 * @generator	http://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
/* Available fields:"youtube_video_url", */
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_ilms_video_pop_up/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_ilms_video_pop_up/assets/js/script.js");
// $width 			= $params->get("width");

/**
	$db = JFactory::getDBO();
	$db->setQuery("SELECT * FROM #__mod_ilms_video_pop_up where del=0 and module_id=".$module->id);
	$objects = $db->loadAssocList();
*/
require JModuleHelper::getLayoutPath('mod_ilms_video_pop_up', $params->get('layout', 'default'));