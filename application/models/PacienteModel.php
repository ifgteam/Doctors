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
            'nomeResponsavel'=>$this->input->post('nomeresponsavel'),
            'sexo'=>$this->input->post('sexo'),
            'estadoCivil'=>$this->input->post('estadocivil'),
            'indicacao'=>$this->input->post('indicacao'),
            'cpf'=>$this->input->post('cpf'),
            'celular'=>$this->input->post('celular'),
            'telefone'=>$this->input->post('telfixo'),
            'telefoneAdicional'=>$this->input->post('teladicio'),
            'cep'=>$this->input->post('cep'),
            'rua'=>$this->input->post('rua'),
            'numero'=>$this->input->post('numero'),
            'complemento'=>$this->input->post('complemento'),
            'bairro'=>$this->input->post('bairro'),
            'cidade'=>$this->input->post('cidade'),
            'estado'=>$this->input->post('uf'),
            'convenio'=>$this->input->post('convenio'),
            'plano'=>$this->input->post('plano'),
            'numeroConvenio'=>$this->input->post('numconvenio'),
            'observacao'=>$this->input->post('obs'),
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
        $field = array(
    			'nome'=>$this->input->post('nome'),
    			'email'=>$this->input->post('email'),
    		);
        $this->db->where('id', $id);
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
