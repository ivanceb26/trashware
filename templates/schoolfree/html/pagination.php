<?php
/**
 * @version		$Id: pagination.php 7692 2007-06-08 20:41:29Z tcp $
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2007 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');

function pagination_list_footer($list)
{
	$lang =& JFactory::getLanguage();
	$html = "<div class=\"list-footer\">\n";

	if ($lang->isRTL())
	{
		$html .= "\n<div class=\"counter\">".$list['pagescounter']."</div>";
		$html .= $list['pageslinks'];
		$html .= "\n<div class=\"limit\">".JText::_('Display Num').$list['limitfield']."</div>";
	}
	else
	{
		$html .= "\n<div class=\"limit\">".JText::_('Display Num').$list['limitfield']."</div>";
		$html .= $list['pageslinks'];
		$html .= "\n<div class=\"counter\">".$list['pagescounter']."</div>";
	}

	$html .= "\n<input type=\"hidden\" name=\"limitstart\" value=\"".$list['limitstart']."\" />";
	$html .= "\n</div>";

	return $html;
}

function pagination_list_render($list)
{
	$lang =& JFactory::getLanguage();
	$html = "<span class=\"pagination\">";

	if($lang->isRTL())
	{
		$html .= '&laquo; '.$list['start']['data'];
		$html .= '&nbsp;'.$list['previous']['data'];

		$list['pages'] = array_reverse( $list['pages'] );

		foreach( $list['pages'] as $page ) {
			if($page['data']['active']) {
				$html .= '<strong>';
			}

			$html .= '&nbsp;'.$page['data'];

			if($page['data']['active']) {
				$html .= '</strong>';
			}
		}

		$html .= '&nbsp;'.$list['next']['data'];
		$html .= '&nbsp;'.$list['end']['data'];
		$html .= ' &raquo;';
	}
	else
	{
		$html .= '&laquo; '.$list['start']['data'];
		$html .= $list['previous']['data'];

		foreach( $list['pages'] as $page )
		{
			if($page['data']['active']) {
				$html .= '<strong>';
			}

			$html .= $page['data'];

			if($page['data']['active']) {
				$html .= '</strong>';
			}
		}

		$html .= $list['next']['data'];
		$html .= $list['end']['data'];
		$html .= ' &raquo;';
	}

	$html .= "</span>";
	return $html;
}

function pagination_item_active(&$item) {
	return "<span class=\"page_active\"><a href=\"".$item->link."\" title=\"".$item->text."\">".$item->text."</a></span>";
}

function pagination_item_inactive(&$item) {
	return '<span class="page_inactive">'.$item->text.'</span>';
}
?>