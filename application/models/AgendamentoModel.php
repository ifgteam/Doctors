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

        $i = 1;
        do {
            $this->db->where('data',$data['data'] and 'hora['+$i+']',$data['hora['+$i+']']);
            $this->db->set('hora_disp['+$i+']', 0);
            return $this->db->update('agenda_medico');

            $i++;
        } while ($i <= 22);
        
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
    
    if($data['hora[2]']!=null){
        $data['	hora_disp[2]'] = 1;
    }

    $data['hora[3]']= $hora[1];
   
    if($data['hora[3]']!=null){
        $data['	hora_disp[3]'] = 1;
    }
   
    $data['hora[4]']= $hora[2];
   
    if($data['hora[4]']!=null){
        $data['	hora_disp[4]'] = 1;
    }

    $data['hora[5]']= $hora[3];
    
    if($data['hora[5]']!=null){
        $data['	hora_disp[5]'] = 1;
    }

    $data['hora[6]']= $hora[4];
    
    if($data['hora[6]']!=null){
        $data['	hora_disp[6]'] = 1;
    }

    $data['hora[7]']= $hora[5];
    
    if($data['hora[7]']!=null){
        $data['	hora_disp[7]'] = 1;
    }

    $data['hora[8]']= $hora[6];
    
    if($data['hora[8]']!=null){
        $data['	hora_disp[8]'] = 1;
    }

    $data['hora[9]']= $hora[7];
    
    if($data['hora[9]']!=null){
        $data['	hora_disp[9]'] = 1;
    }

    $data['hora[10]']=$hora[8];
    
    if($data['hora[10]']!=null){
        $data['	hora_disp[10]'] = 1;
    }

    $data['hora[11]']=$hora[9];
    
    if($data['hora[11]']!=null){
        $data['	hora_disp[11]'] = 1;
    }

    $data['hora[12]']=$hora[10];
    
    if($data['hora[12]']!=null){
        $data['	hora_disp[12]'] = 1;
    }

    $data['hora[13]']=$hora[11];
    
    if($data['hora[13]']!=null){
        $data['	hora_disp[13]'] = 1;
    }

    $data['hora[14]']=$hora[12];
    
    if($data['hora[14]']!=null){
        $data['	hora_disp[14]'] = 1;
    }

    $data['hora[15]']=$hora[13];
    
    if($data['hora[15]']!=null){
        $data['	hora_disp[15]'] = 1;
    }

    $data['hora[16]']=$hora[14];
    
    if($data['hora[16]']!=null){
        $data['	hora_disp[16]'] = 1;
    }
    
    $data['hora[17]']=$hora[15];
    
    if($data['hora[17]']!=null){
        $data['	hora_disp[17]'] = 1;
    }

    $data['hora[18]']=$hora[16];
    
    if($data['hora[18]']!=null){
        $data['	hora_disp[18]'] = 1;
    }
    
    $data['hora[19]']=$hora[17];
    
    if($data['hora[19]']!=null){
        $data['	hora_disp[19]'] = 1;
    }

    $data['hora[20]']=$hora[18];
    
    if($data['hora[20]']!=null){
        $data['	hora_disp[20]'] = 1;
    }

    $data['hora[21]']=$hora[19];
    
    if($data['hora[21]']!=null){
        $data['	hora_disp[21]'] = 1;
    }
    
    $data['hora[22]']=$hora[20];
    
    if($data['hora[22]']!=null){
        $data['	hora_disp[22]'] = 1;
    }

    $d1 = $this->input->post('data_inicio');
    $d2 = $this->input->post('data_fim');
   
    $timestamp1 = strtotime( $d1 );
    $timestamp2 = strtotime( $d2 );

   
    while ( $timestamp1 <= $timestamp2 )
    {
    
    $data['data'] = date('Y-m-d',$timestamp1 += 86400);
        if(date('N', strtotime($data['data'])) != 7 ){
            $this->db->insert('agenda_medico',$data);
        }
    }

       
    }
}