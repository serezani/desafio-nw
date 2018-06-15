<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TpGuerreiro extends CI_Controller{
    public function index(){
        chamaForm("tipo_guerreiro/index.php", "TpGuerreiro_model", "arrayTpGuerreiro");
    }
    
    public function novo() {
       $usuarioLogado = autoriza(); 
       $this->load->template("tipo_guerreiro/frmNovo.php");
    }
    public function incluir(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("nome", "nome", "required");
        $this->form_validation->set_rules("descricao", "descricao", "required");
        $this->form_validation->set_rules("status", "status", "required");
        
        $sucesso = $this->form_validation->run();
        if ($sucesso) :
           $this->load->model("TpGuerreiro_model");
           $this->TpGuerreiro_model->setALL(0,$this->input->post("nome"), $this->input->post("descricao"),$this->input->post("status"));
           $this->TpGuerreiro_model->salva();
           redirect('/tpGuerreiro');
        else :
           $this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>"); 
           $this->load->template("tipo_guerreiro/frmNovo");
        endif;
    }
    
    public function formModifica($id = 0){
        $id = ($id == 0 ? $this->input->get("id") : $id);
        chamaForm("tipo_guerreiro/frmEditar.php", "TpGuerreiro_model", "arrayTpGuerreiro", $id);
    }
    
    public function formExclui(){
        chamaForm("tipo_guerreiro/frmExcluir.php", "TpGuerreiro_model", "arrayTpGuerreiro", $this->input->get("id"));
    }
    
    public function modifica(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("nome", "nome", "required");
        $this->form_validation->set_rules("descricao", "descricao", "required");
        $this->form_validation->set_rules("status", "status", "required");
        
        $sucesso = $this->form_validation->run();
        if ($sucesso) :
           $this->load->model("TpGuerreiro_model");
           $this->TpGuerreiro_model->setALL($this->input->post("id"),$this->input->post("nome"), $this->input->post("descricao"), $this->input->post("status"));
           $this->TpGuerreiro_model->atualiza();
           redirect('/TpGuerreiro');
        else :
           $this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
           $this->formModifica($this->input->post("id"));
        endif;
    }
    public function excluir(){
        efetivaExclusao("/TpGuerreiro", "TpGuerreiro_model", $this->input->post("id"));
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

