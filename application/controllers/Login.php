<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function autenticar() { 
        $this->load->model("Usuario_model");
//            $this->Usuario_model->setEmail($this->input->post("email"));
//            $this->Usuario_model->setSenha($this->input->post("senha"));
        $usuario = $this->Usuario_model->buscarPorEmailESenha($this->input->post("email"),md5($this->input->post("senha")));
        if($usuario) {
            $dados = array("mensagem" => "Logado com sucesso");
            $this->session->set_userdata("usuario_logado" , $usuario);
        } else {
            $dados = array("mensagem" => "Usuário ou senha inválida.");
        }
        redirect('/');
        //$this->load->view('usuarios/autenticar',$dados);
    }
    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        redirect('/');
        //$this->load->view('usuarios/autenticar');
    }
}

