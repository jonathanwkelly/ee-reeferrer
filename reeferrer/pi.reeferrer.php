<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
  'pi_name' => 'EE Reeferrer',
  'pi_version' => '1.0',
  'pi_author' => 'Jonathan W. Kelly',
  'pi_author_url' => 'http://github.com/jonathanwkelly/ee-reeferrer',
  'pi_description' => 'A plugin to use in logical statements against the "HTTP Referer"',
  'pi_usage' => Reeferrer::usage()
  );

/**
 * Buzzsaw Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			Brett DeWoody - ee hive
 * @copyright		Copyright (c) 2010, Brett DeWoody
 * @link			http://www.ee-hive.com/add-ons/hacksaw
 */
class Reeferrer
{
	var $return_data = '';

	// ---

	/**
	 * Checks to see if we ARE coming from a particular referrer
	 * 
	 * @return {string} "yes" or "no"
	 */
	public function is()
	{
		$from = ee()->TMPL->fetch_param('from');

		if(strpos(ee()->input->server('HTTP_REFERER'), $from) !== FALSE)
			$this->return_data = 'yes';

		return $this->return_data;
	}

	// ---

	/**
	 * Checks to see if we are NOT coming from a particular referrer
	 * 
	 * @return {string} "yes" or "no"
	 */
	public function isNot()
	{
		$from = ee()->TMPL->fetch_param('from');
		
		if(strpos(ee()->input->server('HTTP_REFERER'), $from) === FALSE)
			$this->return_data = 'yes';

		return $this->return_data;
	}

	// ---

	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
	?>
See "Author URL" for example usage.
	<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}