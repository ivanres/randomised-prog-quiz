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
	class View_Helper_Question{
		
		/**
		 * Takes Question text, and formats it appropriately
		 */
		public static function format_for_text( $question_text ) {
			
			$rows = explode("\n", $question_text);
			
			// This ensues any lines marked with //HIDE get hidden
			$new_rows = array();
			for( $i = 0; $i < sizeof($rows); $i++ ) {
				$rows[$i] = str_replace("<","&lt;",str_replace(">","&gt;", $rows[$i] ) );
				
				if( strpos($rows[$i], "//HIDE") === false && strlen( str_replace("\t", "", $rows[$i]) ) > 2 ) {
					$new_rows[] = $rows[$i];
				}
			}
			
			return implode("\n", $new_rows);
		}
		
		
	}

?>