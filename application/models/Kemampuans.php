<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kemampuans extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'kemampuan';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama'),
      (object) array('mData' => 'prosentase', 'sTitle' => 'Prosentase Level'),
      (object) array('mData' => 'masing', 'sTitle' => 'Prosentase Jamaah')
    );
    $this->form = array (
        array (
				      'name' => 'nama',
				      'width' => 2,
		      		'label'=> 'Nama',
					  ),
        array (
		      'name' => 'prosentase',
		      'label'=> 'Prosentase',
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
      ->select('kemampuan.nama')
      ->select("CONCAT({$this->table}.prosentase, ' %') prosentase", false)
      ->select("CONCAT(ROUND({$this->table}.prosentase / COUNT(jamaah.uuid), 2), ' %') as masing", false)
      ->join('jamaah', 'kemampuan.uuid = jamaah.kemampuan', 'left')
      ->group_by("{$this->table}.uuid")
      ;
    return parent::dt();
  }

}