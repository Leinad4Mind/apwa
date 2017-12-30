<?php

/**
*
* @package Ad Units
* @copyright BB3.MOBi (c) 2015 Anvar http://apwa.ru
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace apwa\adunits\migrations;

class v_1_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\apwa\adunits\migrations\v_1_0_0');
	}

	public function effectively_installed()
	{
		return isset($this->config['adunits_version']) && version_compare($this->config['adunits_version'], '1.0.1', '>=');
	}

	public function update_data()
	{
		return array(
			// Update version
			array('config.update', array('adunits_version', '1.0.1')),
		);
	}

	public function revert_data()
	{
		return array(
			// Remove version
			array('config.remove', array('adunits_version')),
		);
	}
}