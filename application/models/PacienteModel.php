<?php
include APPPATH . 'libraries/Pacientes.php';
class PacienteModel extends CI_Model{
    public function get_pacientes(){
        $this->db->select('*');
        return $this->db->get('pacientes')->result();
    }
    public function get_especialista(){
        $this->db->select('*');
        return $this->db->get('medico')->result();
    }
    public function mostrarPacientes(){
        $this->db->select('*');
        return $this->db->get('pacientes')->result();
    }
    
    public function addPacientes(){
        $field = array(
			'nome'=>$this->input->post('nome'),
			'email'=>$this->input->post('email'),
		);
        $this->db->insert('pacientes', $field);
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    public function atualizarPacientes(){
        $id = $this->input->get('id');
		$this->db->where('id', $id);
        $field = array(
			'nome'=>$this->input->post('nome'),
			'email'=>$this->input->post('email'),
		);
        $this->db->update('pacientes', $field);
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    function deletePaciente(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('pacientes');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}