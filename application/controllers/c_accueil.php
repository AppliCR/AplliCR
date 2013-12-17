<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_accueil extends CI_Controller{
	function index() {
		$this->load->view("v_accueil.php");
	}

}