<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {

    function __construct(){
		parent:: __construct();
		$this->load->model('PacienteModel', 'm');
	}

    function index(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        $this->load->model('PacienteModel','especialistas');
        $especialistas['especialistas'] = $this->especialistas->get_especialista();
        $this->load->view('agenda/agenda',$especialistas);
        $this->load->view('component/navbar');
        $this->load->view('component/rodape3');
 
 
    }
       function pacientes(){
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar'); 
        $this->load->model('PacienteModel','pacientes');
        $dados['pacientes'] = $this->pacientes->get_pacientes();  
        $this->load->view('pacientes/pacientesList',$dados);     
        $this->load->view('component/rodape3');    
            
    }
    
    function cadastrarPaciente(){
        $this->load->model('FuncionariosModel','funcionarios');  
        $this->funcionarios->cadastrar();
    }
    function prontuario(){

    }
    function buscarData(){
        $this->db->where('agenda_medico', $this->input->post('especialista'));
        echo $this->db->get("data")->row('data');

    }
    public function mostrarPacientes(){
        $this->load->model('PacienteModel','pacientes');
        $result = $this->pacientes->mostrarPacientes();
        echo json_encode($result);
    }


    public function addPaciente(){
		$result = $this->m->addPacientes();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
    }

    public function AtualizaPaciente(){
		$result = $this->m->AtualizaPacientes();
		$msg['success'] = false;
		$msg['type'] = 'Atualiza';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
    }
    
    
	public function deletePaciente(){
		$result = $this->m->deletePaciente();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
}

