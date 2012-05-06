<?php
/**
 *  Randomised Programming Quiz System - A quiz system that develops random programming questions from defined templates
 *  Copyright (C) 2010-2012 Ben Evans <ben@nebev.net>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 **/
	class View_Helper_Sort{
		
		
		public static function sort_by_last_name( $a, $b ) {
			if ($a['last_name'] == $b['last_name']) {
			        return 0;
			}
			return ($a['last_name'] < $b['last_name']) ? -1 : 1;
		}
		
		
		
	}


?>