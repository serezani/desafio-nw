<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model{
    
    private $id_usuario;
    private $nm_usuario;
    private $de_email;
    private $de_senha;
    private $aUpdate = array('nm_usuario','de_email');

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
        return $this->id_usuario;
    }
    
    public function setID($id){
        $this->id_usuario = $id;
    }
    
    public function getNome(){
        return $this->nm_usuario;
    }
    
    public function setNome($nome){
        $this->nm_usuario = $nome;
    }
    
    public function getEmail(){
        return $this->de_email;
    }
    
    public function setEmail($email){
        $this->de_email = $email;
    }
    
    public function getSenha(){
        return $this->de_senha;
    }
    
    public function setSenha($senha){
        $this->de_senha = md5($senha);
    }
    
    public function getAUpdate(){
        return $this->aUpdate;
    }
    
    public function setAUpdate(){
        $this->aUpdate = elements(array('nm_usuario','de_email'), $this->getALL());
    }
    
    public function getALL(){
        if ($this->id_usuario<=0) :
            return array(
                    "nm_usuario" => $this->getNome(),
                    "de_email" => $this->getEmail(),
                    "de_senha" => $this->getSenha()
                );
        
        endif;
        
        return array(
                    "id_usuario" => $this->getID(),
                    "nm_usuario" => $this->getNome(),
                    "de_email" => $this->getEmail(),
                    "de_senha" => $this->getSenha()
                );
    }
    
    
    public function setALL($id, $nome, $email, $senha){        
        $this->setID($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha); 
        $this->setAUpdate();
    }
    
    public function salva() {
        $this->db->insert("usuario", $this->getALL());
    }
    
    public function atualiza() {
        $this->db->where("id_usuario", $this->getID());
        $this->db->update("usuario", $this->getAUpdate());
    }
    
    public function exclui() {
        $this->db->where("id_usuario", $this->getID());
        $this->db->delete("usuario");
    }
    
    public function buscaTodos(){
        $this->db->order_by('nm_usuario', 'ASC');
        return $this->db->get("usuario")->result_array();
    }
    
    public function busca($id){
        return $this->db->get_where("usuario", array("id_usuario" => $id))->row_array();
    }
    
    public function buscarPorEmailESenha($email, $senha){
        $this->db->where("DE_EMAIL", $email);
        $this->db->where("DE_SENHA", $senha);
        return $this->db->get("usuario")->row_array();
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

