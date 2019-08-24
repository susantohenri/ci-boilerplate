<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Struks extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'struk';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Jamaah', 'name' => 'jamaah.nama'),
      (object) array('mData' => 'bulan', 'sTitle' => 'Bulan', 'searchable' => false),
    );
    $this->form = array (
        array (
		      'name' => 'jamaah',
		      'label'=> 'Jamaah',
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Jamaahs'),
		        array('data-field' => 'nama')
			    )),
    );
    $this->childs = array (
        array (
				      'label' => 'Detail',
				      'controller' => 'StrukDetail',
				      'model' => 'StrukDetails'
					  ),
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('jamaah.nama')
      ->select("DATE_FORMAT(tanggal, '%b %Y') bulan", false)
      ->join('jamaah', "jamaah.uuid = {$this->table}.jamaah", 'left')
      ->join('jatahdesa', "jatahdesa.uuid = {$this->table}.jatahdesa", 'left')
      ;
    return parent::dt();
  }

}