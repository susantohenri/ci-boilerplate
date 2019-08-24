<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jamaahs extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'jamaah';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama'),
      (object) array('mData' => 'posisi', 'sTitle' => 'Posisi'),
      (object) array('mData' => 'nama_kemampuan', 'sTitle' => 'Kemampuan', 'searchable' => false)
    );
    $this->form = array (
        array (
				      'name' => 'nama',
				      'width' => 2,
		      		'label'=> 'Nama',
					  ),
        array (
		      'name' => 'kemampuan',
		      'label'=> 'Kemampuan',
		      'options' => array(),
		      'width' => 2,
		      'attributes' => array(
		        array('data-autocomplete' => 'true'),
		        array('data-model' => 'Kemampuans'),
		        array('data-field' => 'nama')
			    )),
        array (
				      'name' => 'posisi',
				      'label'=> 'Posisi',
				      'width' => 2,
		      		'options' => array(
                array('text' => 'Kepala Keluarga', 'value' => 'Kepala Keluarga'),
                array('text' => 'Anggota Keluarga', 'value' => 'Anggota Keluarga'),
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
      ->select('jamaah.nama')
      ->select('jamaah.posisi')
      ->select('kemampuan.nama nama_kemampuan', false)
      ->join('kemampuan', 'jamaah.kemampuan = kemampuan.uuid', 'left')
      ;
    return parent::dt();
  }

}