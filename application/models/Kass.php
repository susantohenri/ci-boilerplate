<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kass extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'kas';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'tanggal', 'sTitle' => 'Tanggal'),

    );
    $this->form = array (
        array (
		      'name' => 'tanggal',
		      'label'=> 'Tanggal',
		      'width' => 2,
		      'attributes' => array(
		        array('data-date' => 'datepicker')
			    )),
        array (
				      'name' => 'deskripsi',
				      'width' => 2,
		      		'label'=> 'Deskripsi',
					  ),
        array (
		      'name' => 'debet',
		      'label'=> 'Debet',
		      'width' => 2,
		      'attributes' => array(
		        array('data-number' => 'true')
			    )),
        array (
		      'name' => 'kredit',
		      'label'=> 'Kredit',
		      'width' => 2,
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
      ->select('kas.tanggal');
    return parent::dt();
  }

}