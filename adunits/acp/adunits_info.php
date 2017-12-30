<?php

/**
*
* @package Ad Units
* @copyright BB3.Mobi 2015 (c) Anvar(http://apwa.ru)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace apwa\adunits\acp;

class adunits_info
{
	function module()
	{
		return array(
			'filename'	=> '\apwa\adunits\acp\adunits_module',
			'title'		=> 'ACP_ADUNITS_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'header'	=> array('title' => 'ADUNITS_HEADER', 'auth' => 'ext_apwa/adunits && acl_a_board', 'cat' => array('ACP_ADUNITS')),
				'footer'	=> array('title' => 'ADUNITS_FOOTER', 'auth' => 'ext_apwa/adunits && acl_a_board', 'cat' => array('ACP_ADUNITS')),
				'viewtopic'	=> array('title' => 'ADUNITS_VIEWTOPIC', 'auth' => 'ext_apwa/adunits && acl_a_board', 'cat' => array('ACP_ADUNITS')),
				'sidebar'	=> array('title' => 'ADUNITS_SIDEBAR', 'auth' => 'ext_apwa/adunits && acl_a_board', 'cat' => array('ACP_ADUNITS')),
			),
		);
	}
}
