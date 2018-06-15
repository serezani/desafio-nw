<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guerreiros extends CI_Controller{
    
    public function index(){
        chamaForm("guerreiros/index.php", "Guerreiro_model", "arrayGuerreiro");
    }

    public function novo() {
       $usuarioLogado = autoriza();
       $this->load->model("Guerreiro_model");
       $arrayTpGuerreiro = $this->Guerreiro_model->buscaTpGuerreiro();
       $dados = array("arrayTpGuerreiro" => $arrayTpGuerreiro);
       $this->load->template("guerreiros/frmNovo.php",$dados);
    }
    
    public function incluir(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("nome", "nome", "required");
        $this->form_validation->set_rules("tp_guerreiro", "tp_guerreiro", "required");
        $this->form_validation->set_rules("especialidade", "especialidade", "required");
        $this->form_validation->set_rules("vida", "vida", "required");
        $this->form_validation->set_rules("defesa", "defesa", "required");
        $this->form_validation->set_rules("dano", "dano", "required");
        $this->form_validation->set_rules("ataque", "ataque", "required");
        $this->form_validation->set_rules("movimento", "movimento", "required");
        
        $sucesso = $this->form_validation->run();
        if ($sucesso) :
           $this->load->model("Guerreiro_model");
           $this->Guerreiro_model->setALL(0,$this->input->post("nome"), $this->input->post("tp_guerreiro"), $this->input->post("especialidade"),$this->input->post("vida"),$this->input->post("defesa"),$this->input->post("dano"),$this->input->post("ataque"),$this->input->post("movimento"), 1, date("d/m/Y"), 1, date("d/m/Y"));
           $this->Guerreiro_model->salva();
           redirect('/Guerreiros');
        else :
           $this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>"); 
           $this->load->template("guerreiros/frmNovo");
        endif;
    }
    
    public function preencheSubArray($array, $arrayAux){
        $array["arrayTpGuerreiro"] = array("arrayTpGuerreiro",$arrayAux);
        return $array;
    }
    
    public function formModifica($id = 0){
        $id = ($id == 0 ? $this->input->get("id") : $id);
//        $this->load->model("Guerreiro_model");
//        $arrayGuerreiro = $this->Guerreiro_model->busca($id);
//        $arrayTpGuerreiro = $this->Guerreiro_model->buscaTpGuerreiro();
//        $dados = array("arrayGuerreiro" => $arrayGuerreiro, "arrayTpGuerreiro" => $arrayTpGuerreiro);
//        $this->load->template("guerreiros/frmEditar.php",$dados);
        chamaForm("guerreiros/frmEditar.php", "Guerreiro_model", "arrayGuerreiro", $id, "arrayTpGuerreiro");                
    }
    
    public function formExclui(){
        chamaForm("guerreiros/frmExcluir.php", "Guerreiro_model", "arrayGuerreiro", $this->input->get("id"));        
    }
    
    public function modifica(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("nome", "nome", "required");
        $this->form_validation->set_rules("tp_guerreiro", "tp_guerreiro", "required");
        $this->form_validation->set_rules("vida", "vida", "required");
        $this->form_validation->set_rules("defesa", "defesa", "required");
        $this->form_validation->set_rules("dano", "dano", "required");
        $this->form_validation->set_rules("ataque", "ataque", "required");
        $this->form_validation->set_rules("movimento", "movimento", "required");
        
        $sucesso = $this->form_validation->run();
        if ($sucesso) :
           $this->load->model("Guerreiro_model");
           $this->Guerreiro_model->setALL($this->input->post("id"),$this->input->post("nome"), $this->input->post("tp_guerreiro"),$this->input->post("vida"),$this->input->post("defesa"),$this->input->post("dano"),$this->input->post("ataque"),$this->input->post("movimento"), 1, date("d/m/Y"), 1, date("d/m/Y"));
           $this->Guerreiro_model->atualiza();
           redirect('/Guerreiros');
        else :
           $this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
           $this->formModifica($this->input->post("id"));
        endif;
    }
    public function excluir(){
        efetivaExclusao("/Guerreiros", "Guerreiro_model", $this->input->post("id"));
    }
    
    public function uploadArquivos(){
        if(isset($_FILES['fileUpload']))
           {
              require 'WideImage/WideImage.php'; //Inclui classe WideImage à página

              date_default_timezone_set("Brazil/East");

              $name     = $_FILES['fileUpload']['name']; //Atribui uma array com os nomes dos arquivos à variável
              $tmp_name = $_FILES['fileUpload']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável

              $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); //Extensões permitidas

              $dir = 'assets/img/';

              for($i = 0; $i < count($tmp_name); $i++) //passa por todos os arquivos
              {
                 $ext = strtolower(substr($name[$i],-4));

                 if(in_array($ext, $allowedExts)) //Pergunta se a extensão do arquivo, está presente no array das extensões permitidas
                 {
                    $new_name = $i . $ext;

                    $image = WideImage::load($tmp_name[$i]); //Carrega a imagem utilizando a WideImage

                    $image = $image->resize(170, 180, 'outside'); //Redimensiona a imagem para 170 de largura e 180 de altura, mantendo sua proporção no máximo possível
                    $image = $image->crop('center', 'center', 170, 180); //Corta a imagem do centro, forçando sua altura e largura

                    $image->saveToFile($dir.$new_name); //Salva a imagem
                 }
              }
           }
    }
}