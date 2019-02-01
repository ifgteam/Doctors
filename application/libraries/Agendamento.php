<?php

class Agendamento{
    private $db;
    private $id_medico;
    private $data;
    private $horario_inicio;
    private $almoco_inicio;
    private $almoco_fim;
    private $horario_fim;
    
    function __construct($data= null, $horario_inicio= null){
        $this->data = $data;
        $this->horario_inicio = $horario_inicio;
        // acesso ao banco de dados
        $ci = & get_instance();
        $this->db = $ci->db;
    }
    public function setId_medico($valor){
        $this->id_medico = $valor;
    }
    
    public function setAlmoco_inicio($valor){
        $this->almoco_inicio = $valor;
    }
    public function setaAmoco_fim($valor){
        $this->almoco_fim = $valor;
    }
    public function setHorario_fim($valor){
        $this->horario_fim = $valor;
    }
   
    public function getDisp($id_medico){
        $cond['id_medico'] = $id_medico; //condição
        $res = $this->db->get_where('agenda_medico',$cond); //active record = pesquisar;
        return $res->row();//retorna o objeto resultante dessa consulta
    }

    

}




