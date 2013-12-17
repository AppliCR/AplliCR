<?php
class m_praticien extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	function afficher_praticien() {
		$this->db->select('PRA_NUM, PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE, PRA_COEFNOTORIETE');
		$this->db->from('praticien');
		$this->db->order_by('PRA_NUM');
		$req=$this->db->get();
		return $req->result_array();
	}
}