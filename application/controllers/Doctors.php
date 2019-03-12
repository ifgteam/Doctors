<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {

    function __construct(){
		parent:: __construct();
		$this->load->model('PacienteModel', 'm');
	}

  function index($indice=null){
    $tmp = $this->session->userdata('usuario');
    $acesso = $tmp['acesso'];
    if($acesso == 1 || $acesso == 2 || $acesso == 3){
    if($indice==3){
        $data['msg'] = "Incluido com sucesso" ;      
       $this->load->view('includes/scs_msg',$data);
       }else if($indice==2){
       $data['msg'] = "Incluido com sucesso";
       $this->load->view('includes/scs_msg',$data);
       } 
    $this->load->helper('url');
    $this->load->view('component/cabecalho');
    $this->load->model('AgendamentoModel', 'especialidades');
    $dados['especialidades'] = $this->especialidades->buscaEspecialidade();
    $dados2['pacientes'] = $this->especialidades->buscaEspecialidade();
    if($acesso == 3){   
    $this->load->view('agenda/agenda2',$dados,$dados2);

    }else{
    $this->load->view('errors/errodeacesso');    
    }    
    $this->load->view('component/navbar');
    
    $this->load->view('component/rodape3');
    }else{
        redirect('Doctors/login');
    }


}
    public function register(){
        $tmp = $this->session->userdata('usuario');
        $acesso = $tmp['acesso'];
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar');
        $this->load->model('RegistroModel','registro');
        $this->registro->register();
        if($acesso == 1){
        $this->load->view('registrousuarios/formregister',null);
        }else{
        $this->load->view('errors/errodeacesso');    
            }   
        $this->load->view('component/rodape3');
    }

    public function login(){ //função para usuario logar no sistema
        $this->load->helper('url');
        $this->load->view('component/cabecalho'); 
        $this->load->model('LoginModel','login');
        $this->login->validate();
        $this->load->view('registrousuarios/formlogin', null);
        $this->load->view('component/rodape3');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Doctors/login');
    }

    public function pacientes(){
        $tmp = $this->session->userdata('usuario');
        $acesso = $tmp['acesso'];
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar');
        if($acesso == 2 || $acesso == 1){
        $this->load->model('PacienteModel','pacientes');
        $dados['pacientes'] = $this->pacientes->get_pacientes();
        $this->load->view('pacientes/pacientesList',$dados);
        }
        else{
        $this->load->view('errors/errodeacesso');
            }
        $this->load->view('component/rodape3');
    }

    function cadastrarPaciente(){
        $this->load->model('FuncionariosModel','funcionarios');
        $this->funcionarios->cadastrar();
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
		$result = $this->m->atualizarPacientes();
		$msg['success'] = false;
		$msg['type'] = 'Atualiza';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
    }

    
    public function arquivarPaciente(){
      $result = $this->m->arquivarPaciente();
      $msg['success'] = false;
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
  
  function cadastrarDisp(){
    $this->load->model('AgendamentoModel','agenda');
   if ($this->agenda->cadastrar_agenda()){
       redirect('Doctors/index/1');
   }else{
    redirect('Doctors/index/2');
   }

}
function cadastrarAgenda(){
    $this->load->model('AgendamentoModel','agenda');
   if ($this->agenda->cadastrar_agendamento()){
       redirect('Doctors/index/1');
   }else{
    redirect('Doctors/index/2');
   }

}
function cadastrarPacientes(){
    $this->load->model('PacienteModel','paciente');
   if ($this->paciente->cadastrar_paciente()){
       redirect('Doctors/index/1');
   }else{
    redirect('Doctors/index/2');
   }

}

function buscarData(){
    $this->db->where('agenda_medico', $this->input->post('especialidade'));
    echo $this->db->get("data")->row('data');

}
public function buscarEspecialista(){
    $this->db->where('agenda_medico', $this->input->post('especialidade'));
    return $this->especialidades->teste();
}


public function incluirDispo(){
    $this->load->helper('url');
    $this->load->view('component/cabecalho');
    $this->load->view('component/navbar'); 
    $this->load->view('agenda/cadastrarHorario'); 
    $this->load->view('component/rodape3');


}
public function myformAjax($idEsp) { 
    $result = $this->db->where("idEspecialidade",$idEsp)->get("medico")->result();
    echo json_encode($result);
}
public function myformAjax2($idEspa) { 
    $result = $this->db->where("idMedico",$idEspa)->get("agenda_medico")->result();
    echo json_encode($result);
}
public function myformAjax3($data2) { 
    $result = $this->db->where("data",$data2)->get("agenda_medico")->result();
    echo json_encode($result);
}
public function myformAjax4() { 
    $result = $this->db->get("pacientes")->result();
    echo json_encode($result);
}
  function myformAjax5($idEspa){
    $this->db->select('*');    
    $this->db->from('agenda');
    $this->db->join('pacientes', 'agenda.paciente = pacientes.id');
    $result = $this->db->where("especialista",$idEspa)->get()->result();
    echo json_encode($result);

}
public function myformAjax6() { 
    $result = $this->db->get("medico")->result();
    echo json_encode($result);
}
public function teste(){


$i = 1;
do {
    $i;
    $i++;
} while ($i <= 22);
}

}
