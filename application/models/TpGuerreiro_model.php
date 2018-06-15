<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TpGuerreiro_model extends CI_Model{
    
    private $id_tp_guerreiro;
    private $nm_tp_guerreiro;
    private $de_tp_guerreiro;
    private $fg_status;
    private $aUpdate = array('nm_tp_guerreiro','de_tp_guerreiro','fg_status');

//    public function __construct() {
//        parent::__construct();
//        $a = func_get_args();
//        call_user_func_array('__constructSubClass', $a);
//    }
//    public function __constructFilha($a){
//        print_r($a);
//     
//    }
    
    public function getID(){
        return $this->id_tp_guerreiro;
    }
    
    public function setID($id){
        $this->id_tp_guerreiro = $id;
    }
    
    public function getNome(){
        return $this->nm_tp_guerreiro;
    }
    
    public function setNome($nome){
        $this->nm_tp_guerreiro = $nome;
    }
    
    public function getDescricao(){
        return $this->de_tp_guerreiro;
    }
    
    public function setDescricao($descricao){
        $this->de_tp_guerreiro = $descricao;
    }
    
    public function getStatus(){
        return $this->fg_status;
    }
    
    public function setStatus($fg_status){
        $this->fg_status = $fg_status;
    }
    
    public function getAUpdate(){
        return $this->aUpdate;
    }
    
    public function setAUpdate(){
        $this->aUpdate = elements(array('nm_tp_guerreiro','de_tp_guerreiro','fg_status'), $this->getALL());
    }
    
    public function getALL(){
        if ($this->id_tp_guerreiro<=0) :
            return array(
                    "nm_tp_guerreiro" => $this->getNome(),
                    "de_tp_guerreiro" => $this->getDescricao(),
                    "fg_status" => $this->getStatus()
                );
        
        endif;
        
        return array(
                    "id_tp_guerreiro" => $this->getID(),
                    "nm_tp_guerreiro" => $this->getNome(),
                    "de_tp_guerreiro" => $this->getDescricao(),
                    "fg_status" => $this->getStatus()
                );
    }
    
    
    public function setALL($id, $nome, $descricao, $status){        
        $this->setID($id);
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setStatus($status); 
        $this->setAUpdate();
    }
    
    public function salva() {
        $this->db->insert("tipo_guerreiro", $this->getALL());
    }
    
    public function atualiza() {
        $this->db->where("id_tp_guerreiro", $this->getID());
        $this->db->update("tipo_guerreiro", $this->getAUpdate());
    }
    
    public function exclui() {
        $this->db->where("id_tp_guerreiro", $this->getID());
        $this->db->delete("tipo_guerreiro");
    }
    
    public function buscaTodos(){
        $this->db->order_by('nm_tp_guerreiro', 'ASC');
        return $this->db->get("tipo_guerreiro")->result_array();
    }
    
    public function busca($id){
        return $this->db->get_where("tipo_guerreiro", array("id_tp_guerreiro" => $id))->row_array();
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

