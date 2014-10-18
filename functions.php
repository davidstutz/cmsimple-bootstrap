<?php
/**
 * @author David Stutz
 * @license GPLv3
 * @package pictures
 * @see https://sourceforge.net/projects/cmsimplebstrt/
 * 
 *  Copyright 2013 - 2014 David Stutz
 * 
 * 	This file is part of the bootstrap template for CMSimple.
 *
 *  The plugin is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The template is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  @see <http://www.gnu.org/licenses/>.
 */
 
/**
 * Generates the menu using bootstrap pills. Only the first level is used in navigation.
 * 
 * @return	string	html output
 */
function bootstrap_li() {
  global $h, $hc, $l, $s;
	
  $html = '<ul class="nav nav-pills nav-top" style="float:right;">' . "\n";
	
	foreach ($l as $index => $level)
	{
		if ($level > 1)
		{
			continue;
		}
		
		if (hide($index))
		{
			continue;
		}
		
		if ($s == $index)
		{
			$html .= '<li class="active"><a href="#">' . $h[$index] . '</a></li>' . "\n";
		}
		else
		{
			$html .= '<li>' . a($index, '') . $h[$index] . '</a></li>' . "\n";
		}
	}
	
	$html .= '</ul>';
	
	return $html;
}