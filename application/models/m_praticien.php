<?php
class m_praticien extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	function afficher_praticien($id) { 
		$this->db->select('PRA_NUM, PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE, PRA_COEFNOTORIETE, TYP_CODE');
		$this->db->from('praticien');
		$this->db->where('PRA_NUM', $id);
		$req=$this->db->get();
		return $req->result_array();
	}
	function afficher_praticien_liste_deroulante() {
		$this->db->select('PRA_NOM');
		$this->db->from('praticien');
		$req=$this->db->get();
		return $req->result_array();
	}
}