<?php defined('BASEPATH') OR exit('No direct script access allowed');

class JatahDesaDetails extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'jatahdesadetail';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'jatahDesa', 'sTitle' => 'JatahDesa'),

    );
    $this->form = array (
        array (
		      'name' => 'infaq',
		      'label'=> 'Infaq',
		      'options' => array(),
		      'width' => 4,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Infaqs'),
		        array('data-field' => 'nama')
			    )),
        array (
		      'name' => 'nominal',
		      'label'=> 'Nominal',
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
      ->select('jatahdesadetail.jatahDesa');
    return parent::dt();
  }

}