<?php

class Pacientes{
    private $db;
    private $id;
    private $nome;
    private $nomeResponsavel;
    private $sexo;
    private $dataNascimento;
    private $estadoCivil;
    private $indicacao;
    private $cpf;
    private $celular;
    private $telefone;
    private $telefoneAdicional;
    private $email;
    private $cep;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $convenio;
    private $plano;
    private $numeroConvenio;
    private $dataConvenio;
    private $observacao;
    
    function __construct($nome= null, $nomeResponsavel= null){
        $this->nome = $nome;
        $this->nomeResponsavel = $nomeResponsavel;
        // acesso ao banco de dados
        $ci = & get_instance();
        $this->db = $ci->db;
    }
    public function setId($valor){
        $this->id = $valor;
    }
    public function setSexo($valor){
        $this->sexo = $valor;
    }
    public function setDataNascimento($valor){
        $this->dataNascimento = $valor;
    }
    public function setEstadoCivil($valor){
        $this->estadoCivil = $valor;
    }

    public function setIndicacao($valor){
        $this->indicacao = $valor;
    }
    public function setCpf($valor){
        $this->cpf = $valor;
    }
    public function setCelular($valor){
        $this->celular = $valor;
    }
    public function setTelefone($valor){
        $this->telefone = $valor;
    }
    public function setTelefoneAdicional($valor){
        $this->telefoneAdicional = $valor;
    }
    public function setEmail($valor){
        $this->email = $valor;
    }
    public function setCep($valor){
        $this->cep = $valor;
    }
    public function setNumero($valor){
        $this->numero = $valor;
    }
    public function setComplemento($valor){
        $this->complemento = $valor;
    }
    public function setBairro($valor){
        $this->bairro = $valor;
    }
    public function setCidade($valor){
        $this->cidade = $valor;
    }
    public function setConvenio($valor){
        $this->convenio = $valor;
    }
    public function setPlano($valor){
        $this->plano = $valor;
    }
    public function setNumeroConvenio($valor){
        $this->numeroConvenio = $valor;
    }
    public function setDataConvenio($valor){
        $this->dataConvenio = $valor;
    }
    public function setObservacao($valor){
        $this->observacao = $valor;
    }

    // public function getFuncionarios($id){
    //     $cond['id'] = $id; //condição
    //     $res = $this->db->get_where('pacientes',$cond); //active record = pesquisar;
    //     return $res->row();//retorna o objeto resultante dessa consulta
    // }

    

}












?>