<?php
/**
 * Theme's function file.
 *
 * The functions.php file is used to enable Theme Features such as Sidebars, Navigation Menus, Post Thumbnails,
 * Post Formats, Custom Headers, Custom Backgrounds ...
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * General Public Licence for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package yatta
 * @subpackage Functions
 * @version 1.0.0
 * @since 1.0.0
 * @author Gilles Vauvarin
 * @copyright Kattagami WordPress theme, Copyright (c) 2013, Gilles Vauvarin
 * @link http://kattagami.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* ----------------------------------------------------------------------------------------------------------------------
*
*                       ////////////////      YATTA CHILD THEME      ////////////////
*
------------------------------------------------------------------------------------------------------------------------- */


// The "CHILD_THEME_URI" constants is defined in the parent theme.

/* Requires  */
//require_once( get_stylesheet_directory() . '/zones/zone-header.php' );


/* The "after_setup_theme" WordPress hook is fired once both the parent and child themes functions files are loaded. */
add_action( 'after_setup_theme' , 'yatta_theme_setup_child' , 11 );


/**
* Load child theme sytlesheets
*
*/
function child_theme_styles() {
        wp_enqueue_style( 'child-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );




/**
 * Theme setup function.
 *
 * "after_setup_theme" WordPress hook is fired once both the parent and child themes
 * functions files are loaded. (Priority 10 in the parent theme, 11 in the child theme).
 *
 * @since 1.0.0
 */
function yatta_theme_setup_child() {



}

    

?>