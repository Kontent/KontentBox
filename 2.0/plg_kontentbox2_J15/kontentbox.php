<?php
/**
 * @version		$Id: kontentbox.php 2008-11 Kontent Design $
 * @license		GNU/GPL
 *
 * KontentBox combines the popular Lightbox JS v2.0 by Lokesh Dhakar,
 * with the MediaBox.
 * From http://www.digitalia.be/software/slimbox
 * Slimbox is free software released under MIT License.
 * http://www.opensource.org/licenses/mit-license.php
 * http://iaian7.com/webcode/Mediabox
 */

// Plugins should check JPATH_BASE not _JEXEC.

defined('JPATH_BASE') or die('Restricted access');

class plgContentKontentbox extends JPlugin
{
	function onPrepareContent(&$row, &$params)
	{
		// Add the mootools behavior.
		JHTML::_('behavior.mootools');
		JHTML::stylesheet('kontentbox.css', 'plugins/content/kontentbox/');
		JHTML::script('kontentbox.js', 'plugins/content/kontentbox/');
	}
}