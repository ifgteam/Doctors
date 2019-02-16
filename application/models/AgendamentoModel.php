<?php
include APPPATH . 'libraries/Agendamento.php';
class AgendamentoModel extends CI_Model{
   
    public function getDisp($id_medico){
        $disp=new Agendamento();
        return $disp->getDis($id_medico);
    }

    function buscarEspecialista(){
        $this->db->select('*');
        return $this->db->get('medico')->result();

    }
    function buscaEspecialidade(){
        $this->db->select('*');
        return $this->db->get('especialidades')->result();

    }
    public function mostrarPacientes(){
        $this->db->select('*');
        return $this->db->get('pacientes')->result();
    }

    function teste(){
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->join('pacientes', 'pacientes.id = agenda.paciente');
        $this->db->join('medicos', 'medicos.idMedico = agenda.especialista');
        $this->db->join('status', 'status.idStatus = agenda.status');
        return $this->db->get();
    }

    public function cadastrar_agendamento(){
        $data['especialidade']= $this->input->post('especialidade');
        $data['especialista']= $this->input->post('especialista');
        $data['data']= $this->input->post('date');
        $data['hora']= $this->input->post('hora');
        $data['paciente']= $this->input->post('paciente');
        $data['status']= '1';

        
        
              
       return $this->db->insert('agenda',$data);
    }

    public function cadastrar_agenda(){
      
       //hora inicial
    // $horaInicial = new DateTime('07:00');
    $horaInicial =new DateTime($this->input->post('inicio'));
    //hora final
    $horaFinal = new DateTime($this->input->post('fim'));
    //O valor é somado dentro do while, para evitar que repita a hora final
    while($horaInicial->add(new DateInterval('PT30M')) < $horaFinal) {   
    $hora[] = $horaInicial->format('H:i');
    }
    

    $data['idMedico']= 9;
    $data['inicio']= $this->input->post('inicio');
    $data['inicio_almoco']= $this->input->post('inicio_almoco');
    $data['fim_almoco']= $this->input->post('fim_almoco');
    $data['fim']= $this->input->post('fim');
    $data['hora[1]']= $this->input->post('inicio');
    $data['hora[2]']= $hora[0];
    $data['hora[3]']= $hora[1];
    $data['hora[4]']= $hora[2];
    $data['hora[5]']= $hora[3];
    $data['hora[6]']= $hora[4];
    $data['hora[7]']= $hora[5];
    $data['hora[8]']= $hora[6];
    $data['hora[9]']= $hora[7];
    $data['hora[10]']=$hora[8];
    $data['hora[11]']=$hora[9];
    $data['hora[12]']=$hora[10];
    $data['hora[13]']=$hora[11];
    $data['hora[14]']=$hora[12];
    $data['hora[15]']=$hora[13];
    $data['hora[16]']=$hora[14];
    $data['hora[17]']=$hora[15];
    $data['hora[18]']=$hora[16];
    $data['hora[19]']=$hora[17];
    $data['hora[20]']=$hora[18];
    $data['hora[21]']=$hora[19];
    $data['hora[22]']=$hora[20];
    

    $d1 = $this->input->post('data_inicio');
    $d2 = $this->input->post('data_fim');
   
    $timestamp1 = strtotime( $d1 );
    $timestamp2 = strtotime( $d2 );

   
    while ( $timestamp1 <= $timestamp2 )
    {
    
    $data['data'] = date('Y-m-d',$timestamp1 += 86400);
        if(date('N', strtotime($data['data'])) != 7){
            $this->db->insert('agenda_medico',$data);
        }
    }

       
    }
}