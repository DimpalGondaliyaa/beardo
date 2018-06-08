<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_cat_two extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Add cat two",
			"stylesheet" => array("add_cat_two.css")
		);
		$footerData = array(
			"jsFiles" => array("add_cat_two.js")
		);
		$viewData = array(
			"viewName" => "add_cat_two",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function addsubcat()
	{
		$data = array('cat_one' => $_POST['cat_one'] ,
		'subcat_name' => $_POST['subcat_name']  );

		$this->db->insert("category_two",$data);
		$id = $this->db->insert_id();

		$iddd=$id."_cat_img.".pathinfo($_FILES['cat_img']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('cat_img'=>$iddd);

		$this->db->where("id",$id);
		$this->db->update("category_two",$adduserimgg);
	/*	$this->profile_about_model->uppostimg($adduserimgg,$id);*/

		$config["upload_path"]='html/images/sub_category';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$id."_cat_img";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('cat_img');
	}
}
