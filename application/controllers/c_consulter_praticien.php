<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_consulter_praticien extends CI_Controller {
	/*function index() {
		$this->load->view("v_consulter_praticien.php");
	}*/
	function afficher_praticien() {
		$this->load->model("m_praticien");
		$data['praticien'] = $this->m_praticien->afficher_praticien();
		$this->load->view("v_consulter_praticien", $data);
	}
	function afficher_type_praticien() {
		$this->load->model("m_type_praticien");
		$data['type_praticien'] = $this->m_type_praticien->afficher_type_praticien();
		$this->load->view("v_consulter_praticien", $data);
	}
}
