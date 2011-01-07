<?php
/**
 * elFinder plugin for Wolf CMS <http://www.wolfcms.org>
 *
 * @package Plugins
 * @subpackage elfinder
 *
 * @author Devi Mandiri <devi[dot]mandiri[at]gmail[dot]com>
 * @license UNLICENSE - http://unlicense.org
 * 
 * elFinder license refer to LICENSE.elfinder
 */

if (!defined('IN_CMS')) { exit(); }

Plugin::setInfos(array(
    'id'          => 'elfinder',
    'type'		  => 'both',
    'title'       => 'elfinder',
    'description' => 'Provides interface to manage files using elFinder (http://elrte.org/elfinder).',
    'version'     => '1.0.0',
    'license'	  => 'Unlicense',
    'author'	  => 'Devi Mandiri',
    'website'     => 'http://github.com/devi/wolf-elFinder',
    'update_url'  => 'http://devi.web.id/wolf-plugin-versions.xml',
    'require_wolf_version' => '0.7.3'
));

Plugin::addController('elfinder', 'File Browser');
     
Dispatcher::addRoute(array(
	'/elfinder' => '/plugin/elfinder/index',
	'/elfinder/' => '/plugin/elfinder/index',
	'/elfinder/:any' => '/plugin/elfinder/index/$1'
));  
