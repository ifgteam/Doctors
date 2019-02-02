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
        return $this->db->get('teste')->result();
    }
    public function addPacientes(){
        $field = array(
			'nome'=>$this->input->post('nome'),
			'email'=>$this->input->post('email'),
		);
        $this->db->insert('teste', $field);
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }

}