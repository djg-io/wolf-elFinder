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

define('ELFINDER_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('ELFINDER_URI', PLUGINS_URI.'elfinder');

include_once ELFINDER_DIR.'elFinder.class.php';

class ELfinderController extends PluginController {
	
	// @todo create setting + documentation page
	public function __construct()
	{		
		AuthUser::load();
		if (!AuthUser::isLoggedIn()) { 
			header("HTTP/1.0 404 Not Found");
			header("Status: 404 Not Found");
			exit();
		}
	}
	
	public function index($args = NULL)
	{
		if ($args === 'connector')
		{
			echo $this->_connector();
			exit();
		}
			
		$eCallback = $this->_standardCallback();	
		if ($args === 'tinymce')
		{
			$eCallback = $this->_tinyMCECallback();			
		}		
		
		echo new View(ELFINDER_DIR.'/views/index', array(
			'elConnector' => URL_PUBLIC.'elfinder/connector',
			'editorCallback' => $eCallback
		));
	}
	
	// @todo put options in database
	private function _connector()
	{
		$_opts = array(
			'root'			=> realpath($_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']).'/public/'),
			'URL'			=> URL_PUBLIC.'public/',
			'rootAlias'		=> 'Files',
			//'uploadAllow'	=> array('image/jpg','image/jpeg','image/png','image/gif'), 
			'uploadDeny'	=> array('application/x-msdos-program', 'application/octet-stream'),
			'uploadOrder'	=> 'deny,allow',
			//'mimeDetect'	=> 'internal',
			'debug'		=> true
		);		
		
		$el = new elFinder($_opts);
		$el->run();		
	}
	
	private function _standardCallback()
	{
		return "if (window.console && window.console.log) {
				window.console.log(url);
			  } else {
				alert(url);
			  }";		
	}
	
	private function _tinyMCECallback()
	{	
		return "window.tinymceFileWin.document.forms[0].elements[window.tinymceFileField].value = url;
				window.tinymceFileWin.focus();
				window.tinymceFileWin.ImageDialog.showPreviewImage(url);
				window.close();";
	}
}
