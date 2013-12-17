<?php
class m_type_praticien extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	function afficher_type_praticien() {
		$this->db->select('TYP_LIBELLE');
		$this->db->from('type_praticien');
		$req=$this->db->get();
		return $req->result_array();
	}
}