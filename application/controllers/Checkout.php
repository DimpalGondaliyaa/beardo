<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Checkout",
			"stylesheet" => array("checkout.css")
		);
		$footerData = array(
			"jsFiles" => array("checkout.js")
		);
		$viewData = array(
			"viewName" => "checkout",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
