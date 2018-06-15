<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller{
    public function index(){
        chamaForm("usuarios/index.php", "Usuario_model", "arrayUsuarios");
    }
    
    public function novo() {
       $usuarioLogado = autoriza(); 
       $this->load->template("usuarios/frmNovo.php");
    }
    public function incluir(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("nome", "nome", "required");
        $this->form_validation->set_rules("email", "email", "required");
        $this->form_validation->set_rules("senha", "senha", "required");
        
        $sucesso = $this->form_validation->run();
        if ($sucesso) :
           $this->load->model("Usuario_model");
           $this->Usuario_model->setALL(0,$this->input->post("nome"), $this->input->post("email"),$this->input->post("senha"));
           $this->Usuario_model->salva();
           redirect('/usuarios');
        else :
           $this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>"); 
           $this->load->template("usuarios/frmNovo");
        endif;
    }
    public function formModifica($id = 0){
        $id = ($id == 0 ? $this->input->get("id") : $id);
        chamaForm("usuarios/frmEditar.php", "Usuario_model", "arrayUsuario", $id);
    }
    
    public function formExclui(){
        chamaForm("usuarios/frmExcluir.php", "Usuario_model", "arrayUsuario", $this->input->get("id"));
    }
    
    public function modifica(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("nome", "nome", "required");
        $this->form_validation->set_rules("email", "email", "required");
        $sucesso = $this->form_validation->run();
        if ($sucesso) :
           $this->load->model("Usuario_model");
           $this->Usuario_model->setALL($this->input->post("id"),$this->input->post("nome"), $this->input->post("email"), '');
           $this->Usuario_model->atualiza();
           redirect('/usuarios');
        else :
           $this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
           $this->formModifica($this->input->post("id"));
        endif;
    }
    public function excluir(){
        efetivaExclusao("/usuarios", "Usuario_model", $this->input->post("id"));
    }
}