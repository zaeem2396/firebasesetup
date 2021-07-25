<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Firebase extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('firestore');
		$this->load->model('Firebase_model');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function submit()
	{
		$db = firestore();
		$age = $this->input->post("age");
		$fname = $this->input->post("fname");
		$data = [
			"age" => intval($age),
			"fname" => $fname
		];
		try {
			$db->collection("users")->add($data);
			echo json_encode(["status" => 200]);
		} catch (Exception $e) {
			echo json_encode(["status" => 500]);
		}
		
	}

	public function view()
	{
		$data['getFirebaseData'] = $this->Firebase_model->getAllData();
		$this->load->view("view", $data);
	}

	public function deleteData()
	{
		$db = firestore();
		$id = $this->input->post("id");
		try {
			$db->collection('users')->document($id)->delete();
			echo json_encode(["status" => 200]);
		} catch (Exception $e) {
			var_dump($e);
			echo json_encode(["status" => 500]);
		}
	}
}
