<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_List extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Category List",
			"stylesheet" => array("category_List.css")
		);
		$footerData = array(
			"jsFiles" => array("category_List.js")
		);
		$viewData = array(
			"viewName" => "category_List",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
