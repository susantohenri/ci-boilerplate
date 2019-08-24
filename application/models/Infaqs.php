<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Infaqs extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'infaq';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama'),

    );
    $this->form = array (
        array (
				      'name' => 'nama',
				      'width' => 2,
		      		'label'=> 'Nama',
					  ),
        array (
				      'name' => 'level',
				      'label'=> 'Level',
				      'width' => 2,
		      		'options' => array(
                array('text' => 'Pusat', 'value' => 'Pusat'),
                array('text' => 'Daerah', 'value' => 'Daerah'),
                array('text' => 'Desa', 'value' => 'Desa'),
                array('text' => 'Kelompok', 'value' => 'Kelompok'),
				      )
					  ),
        array (
				      'name' => 'kk',
				      'label'=> 'Per KK',
				      'width' => 2,
		      		'options' => array(
                array('text' => 'Tidak', 'value' => 'Tidak'),
                array('text' => 'Ya', 'value' => 'Ya'),
				      )
					  ),
    );
    $this->childs = array (
    );
  }

  function dt () {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('infaq.nama');
    return parent::dt();
  }

}