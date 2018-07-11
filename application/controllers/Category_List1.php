<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_List1 extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Category List",
			"stylesheet" => array("category_List1.css")
		);
		$footerData = array(
			"jsFiles" => array("category_List1.js")
		);
		$viewData = array(
			"viewName" => "category_List1",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
