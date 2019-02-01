<?php
include APPPATH . 'libraries/Agendamento.php';
class PacienteModel extends CI_Model{
   
    public function getDisp($id_medico){
        $disp=new Agendamento();
        return $disp->getDis($id_medico);
    }
}