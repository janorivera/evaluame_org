<?php
/**
 * Alejandro
 * Helper to manage and use media files
 *
 * @package	Own
 * @author	Alejandro
 * @copyright	
 * @copyright	
 * @license	
 * @link	
 * @since	
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Media Helpers
 *
 * @package		Own
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Alejandro
 * @link		
 */

// ------------------------------------------------------------------------

if ( ! function_exists('get_media_path'))
{
	/**
	 * Element
	 *
	 * Gets the path of an specific media based on the name, type and format
	 * If the element is empty it returns NULL (or whatever you specify as the default value.)
	 * It uses the 'url' helper
	 * @param	string
	 * @param	string
	 * @param	string
	 * @return	string path of the media file
	 */
	function get_media_path($mediaType, $mediaFileName, $mediaFormat)
	{ 
		
		return base_url('application/media/'.$mediaType.'/'.$mediaFileName.'.'.$mediaFormat) ;
		
	}
}

// ------------------------------------------------------------------------
