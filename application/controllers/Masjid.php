<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Masjid extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Masjids';
		parent::__construct();
	}

}