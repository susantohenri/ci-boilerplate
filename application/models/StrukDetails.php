<?php defined('BASEPATH') OR exit('No direct script access allowed');

class StrukDetails extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'strukdetail';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'struk', 'sTitle' => 'Struk'),

    );
    $this->form = array (
        array (
		      'name' => 'dijatah',
		      'label'=> 'Dijatah',
		      'width' => 3,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
        array (
		      'name' => 'dibulatkan',
		      'label'=> 'Dibulatkan',
		      'width' => 3,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
        array (
		      'name' => 'diterima',
		      'label'=> 'Diterima',
		      'width' => 3,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
    );
    $this->childs = array (
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('strukdetail.struk');
    return parent::dt();
  }

}