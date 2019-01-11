<?php
require_once('Model.php');

Class Controller{
	public function create(){
		$data = array();
		$data = $_POST;
		unset($data['create']);
		$obj_Model = new Model();
		$obj_Model->create('user_tbl',$data);
	}

	public function update(){
		$data = array();
		$data = $_POST;
		unset($data['update']);
		$obj_Model = new Model();
		$obj_Model->update($data);
	}

}
$obj_Controller = new Controller();

if (isset($_POST['create'])) {
	$obj_Controller->create();
}


if (isset($_POST['update'])) {
	$obj_Controller->update();
}
