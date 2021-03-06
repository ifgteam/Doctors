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
        return $this->db->get_where('pacientes', 'status = 1')->result();
    }

    public function addPacientes(){
      $var = $this->input->post('datanas');
      $date = str_replace('/', '-', $var);
      $nascimento = date('Y-m-d', strtotime($date));

      $var2 = $this->input->post('dataconvenio');
      $date2 = str_replace('/', '-', $var2);
      $dataconvenio = date('Y-m-d', strtotime($date2));
        $field = array(
			      'nome'=>$this->input->post('nome'),
            'email'=>$this->input->post('email'),
            'nomeResponsavel'=>$this->input->post('nomeresponsavel'),
            'dataNascimento'=>$nascimento,
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
            'dataConvenio'=>$dataconvenio,
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
        $id = $this->input->post('idAtt');
        $var = $this->input->post('datanas');
        $date = str_replace('/', '-', $var);
        $nascimento = date('Y-m-d', strtotime($date));

        $var2 = $this->input->post('dataconvenio');
        $date2 = str_replace('/', '-', $var2);
        $dataconvenio = date('Y-m-d', strtotime($date2));
          $field = array(
              'nome'=>$this->input->post('nome'),
              'email'=>$this->input->post('email'),
              'nomeResponsavel'=>$this->input->post('nomeresponsavel'),
              'dataNascimento'=>$nascimento,
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
              'dataConvenio'=>$dataconvenio,
              'plano'=>$this->input->post('plano'),
              'numeroConvenio'=>$this->input->post('numconvenio'),
              'observacao'=>$this->input->post('obs'),
      );
        $this->db->update('pacientes', $field, array('id' => $id));
        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }

    function arquivarPaciente(){
      $id = $this->input->get('id');
      $data = array('status' => 0);
      $this->db->update('pacientes', $data, array('id' => $id));
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
