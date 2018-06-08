
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_cat_three extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Add cat three",
			"stylesheet" => array("add_cat_two.css")
		);
		$footerData = array(
			"jsFiles" => array("add_cat_two.js",'add_cat_three.js')
		);
		$viewData = array(
			"viewName" => "add_cat_three",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function addsubchilid()
	{
		$data = array('cat_one' => $_POST['cat_one'] ,
			'cat_two' => $_POST['cat_two'],
			'lastcat_name' =>$_POST['lastcat_name'],
			'price' => $_POST['price'],
			'description' =>$_POST['description'],
		  );

		$this->db->insert("category_three",$data);
		$id = $this->db->insert_id();

		$iddd=$id."_cat_img.".pathinfo($_FILES['cat_img']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('cat_img'=>$iddd);

		$this->db->where("id",$id);
		$this->db->update("category_three",$adduserimgg);
	/*	$this->profile_about_model->uppostimg($adduserimgg,$id);*/

		$config["upload_path"]='html/images/category_three';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$id."_cat_img";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('cat_img');
	}
}
