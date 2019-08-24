<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Qurban extends MY_Controller {

	function __construct ()
	{
		$this->model = 'Qurbans';
		parent::__construct();
	}

}