<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_details extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Category_details",
			"stylesheet" => array("category_details.css")
		);
		$footerData = array(
			"jsFiles" => array("category_details.js")
		);
		$viewData = array(
			"viewName" => "category_details",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
