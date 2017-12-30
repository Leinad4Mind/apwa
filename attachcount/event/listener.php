<?php

/**
*
* @package Attachments Counter
* @copyright BB3.Mobi 2015 (c) Anvar(http://apwa.ru)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace apwa\attachcount\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\config\config;
use phpbb\template\template;

class listener implements EventSubscriberInterface
{

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	public function __construct(
		config $config, 
		template $template
	)
	{
		$this->config	 = $config;
		$this->template	 = $template;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'	=> 'attach_counter',
		);
	}

	public function attach_counter()
	{
		$this->template->assign_var('TOTAL_ATTACHMENTS', (int) $this->config['num_files']);
	}
}
