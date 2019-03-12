<?php
defined('BASEPATH') OR exit('No direct script access allowed');//impede o acesso ao arquivo diretamente

include APPPATH . 'libraries/Login.php';

class LoginModel extends CI_model{
    public function validate(){
        
         if(sizeof($_POST) == 0){
             return;
        }
         $this->form_validation->set_rules('email', 'Email', 'required'); //regras para os campos de formulario
         $this->form_validation->set_rules('senha', 'Senha', 'required');
         
         if($this->form_validation->run()){
             //dados estao consistentes
             $data = $this->input->post();
             
             
             $login = new Login();
             $user = $login->validate($data);
             
            
             
             if($user != null){
                 
                 $this->session->set_userdata('usuario', $user);
                 $tmp = $this->session->userdata('usuario');
                 $acesso = $tmp['acesso'];
                 if($acesso == 2){
                 redirect('Doctors/pacientes');
                 }
                 if($acesso == 1){
                    redirect('Doctors/register');
                }
                if($acesso == 3){
                    redirect('Doctors');
                    }
                //login valido : Registrar usuario na sessao
                 
                 
                }
             else{
                 echo"<script language='javascript' type='text/javascript'>alert('Usuario ou senha incorreto!')</script>";
                 //usuario ou senha incorreta
             }
          
         }
         else{
             echo"<script language='javascript' type='text/javascript'>alert('Algum campo esta vazio... tente novamente')</script>";
             // dados do form estao incorretos
             
         }
    }

    public function redefinirsenha(){
        if(sizeof($_POST) == 0){
            return;
        }
        $this->form_validation->set_rules('email', 'Email', 'required'); //regras para os campos de formulario
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        if($this->form_validation->run()){
        $data = $this->input->post();
             
        $login = new Login();
        $user = $login->validate($data);
        if($user != null){
            $this->session->set_userdata('usuario', $user);
            redirect('Doctors/redefinirsenha');

        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Usuario ou senha incorreto!')</script>";
            //usuario ou senha incorreta
        }
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('Algum campo esta vazio... tente novamente')</script>";
        // dados do form estao incorretos
        
    }
    }

    public function novasenha(){
        $tmp = $this->session->userdata('usuario');
        $aux['senhaantiga'] = $tmp['senha'];
        $data = $this->input->post();
        $data['senhaantiga']= $aux['senhaantiga'];
        $login =  new Login();
        $user = $login->redefinirsenha($data);
        if($user != null){
            echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com Sucesso');</script>";
        }
        else{
            echo"<script language='javascript' type='text/javascript'>alert('Email já cadastrado');</script>";
        }
    }
}
?>
