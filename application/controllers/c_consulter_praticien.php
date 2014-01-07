<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_consulter_praticien extends CI_Controller {
	function afficher_praticien($id) {
		$this->load->model("m_praticien");
		$data['praticien'] = $this->m_praticien->afficher_praticien($id);
		$data['nom_praticien'] = $this->m_praticien->afficher_praticien_liste_deroulante();
		$this->load->view("v_consulter_praticien", $data);
	}
	function afficher_praticien_liste_deroulante() {
		$this->load->model("m_type_praticien");
		$data['praticien_liste'] = $this->m_praticien->afficher_praticien_liste_deroulante();
		$this->load->view("v_consulter_praticien", $data);
	}
	
}
