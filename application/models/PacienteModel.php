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

}