<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Cart",
			"stylesheet" => array("cart.css")
		);
		$footerData = array(
			"jsFiles" => array("cart.js")
		);
		$viewData = array(
			"viewName" => "cart",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
