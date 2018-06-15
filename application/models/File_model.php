<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Especialidade_model extends CI_Model{
    
    private $id_guerreiro;
    private $id_file;
    private $de_file;
    private $de_caminho;
    
    //private $aUpdate = array('nm_esp_guerreiro','de_esp_guerreiro','fg_status');

//    public function __construct() {
//        parent::__construct();
//        $a = func_get_args();
//        call_user_func_array('__constructSubClass', $a);
//    }
//    public function __constructFilha($a){
//        print_r($a);
//     
//    }
    
    public function getIDGuerreiro(){
        return $this->$id_guerreiro;
    }
    
    public function setIDGuerreiro($idGuerreiro){
        $this->$id_guerreiro = $idGuerreiro;
    }
    
    public function getIDFile(){
        return $this->nm_esp_guerreiro;
    }
    
    public function setIDFile($idfile){
        $this->nm_esp_guerreiro = $idfile;
    }
    
    public function getFile(){
        return $this->de_file;
    }
    
    public function setFile($file){
        $this->de_file = $file;
    }
    
    public function getCaminho(){
        return $this->de_caminho;
    }
    
    public function setCaminho($caminho){
        $this->de_caminho = $caminho;
    }
    
    public function getALL(){
        return array(
                    "id_guerreiro" => $this->getIDGuerreiro(),
                    "id_file" => $this->getIDFile(),
                    "de_file" => $this->getFile(),
                    "de_caminho" => $this->getFilz()
                );
    }
    
    
    public function setALL($idGuerreiro, $idFile, $file){        
        $this->setIDGuerreiro($idGuerreiro);
        $this->setIDFile($idFile);
        $this->setFile($file);
    }
    
    public function salva() {
        $this->db->insert("guerreiro_v_file", $this->getALL());
    }
    
    public function exclui() {
        $this->db->where("id_guerreiro", $this->getIDGuerreiro());
        $this->db->where("id_file", $this->getIDFile());
        $this->db->delete("guerreiro_v_file");
    }
    
    public function buscaTodos(){
        $this->db->where("id_guerreiro", $this->getIDGuerreiro());
        $this->db->order_by('nm_esp_guerreiro', 'ASC');
        return $this->db->get("especialidade_guerreiro")->result_array();
    }
    
    public function busca($id){
        return $this->db->get_where("especialidade_guerreiro", array("id_esp_guerreiro" => $id))->row_array();
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

