<?php

class Persona extends CI_Model{
	public $table = 'personas';
	public $table_id = 'persona_id';
	public function __construct(){

	}

	function find($id){
		$this->db->select();
		$this->db->from($this->table);
		$this->db->where($this->table_id,$id);
		$query = $this->db->get();
		return $query->row();
	}

	function findAll(){
		$this->db->select();
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}	

	function pagination($pag_size, $offset,$search){
		$this->db->select();
		$this->db->from($this->table);
		$this->db->limit($pag_size, $offset);
		if($search != ""){
		   $this->db->like("nombre",$search);
		}   
		$query = $this->db->get();
		return $query->result();
	}	

	function count($search){
		$this->db->select();
		$this->db->from($this->table);
		if($search != ""){
			$this->db->like("nombre",$search);
		}   		
		$query = $this->db->get();
		return $query->num_rows();
	}	

	function search($search){
		$this->db->select();
		$this->db->from($this->table);
		$this->db->like("nombre",$search);
		$query = $this->db->get();
		return $query->result();
	}	

	function insert($data){
		$this->db->insert($this->table,$data);
		return $this->db->insert_id();
	}

	function update($id, $data){
		$this->db->where($this->table_id,$id);
		$this->db->update($this->table,$data);
	}
	
	function delete($id){
		$this->db->where($this->table_id,$id);
		$this->db->delete($this->table);
	}


}

