<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guerreiro_model extends CI_Model{
    
    private $id_guerreiro;
    private $nm_guerreiro;
    private $id_tp_guerreiro;
    private $de_esp_querreiro;
    private $qt_vida;
    private $qt_defesa;
    private $qt_dano;
    private $qt_vel_ataque;
    private $qt_vel_movimento;
    private $id_usu_inclusao;
    private $hr_inclusao;
    private $id_usu_alteracao;
    private $hr_alteracao;
  
    private $aUpdate = array('nm_guerreiro','id_tp_guerreiro', 'de_esp_guerreiro','qt_vida','qt_defesa','qt_dano','qt_vel_ataque','qt_vel_movimento','id_usu_inclusao','hr_inclusao','id_usu_alteracao','hr_alteracao');

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
        return $this->id_guerreiro;
    }
    
    public function setID($id){
        $this->id_guerreiro = $id;
    }
    
    public function getNome(){
        return $this->nm_guerreiro;
    }
    
    public function setNome($nome){
        $this->nm_guerreiro = $nome;
    }
    
    public function getTpGuerreiro(){
        return $this->id_tp_guerreiro;
    }
    
    public function setTpGuerreiro($tp_guerreiro){
        $this->id_tp_guerreiro = $tp_guerreiro;
    }
    
    public function getEspGuerreiro(){
        return $this->de_esp_querreiro;
    }
    
    public function setEspGuerreiro($esp_guerreiro){
        $this->de_esp_querreiro = $esp_guerreiro;
    }
    
    public function getStatus(){
        return $this->fg_status;
    }
    
    public function setStatus($fg_status){
        $this->fg_status = $fg_status;
    }
    
    public function getVida(){
        return $this->qt_vida;
    }
    
    public function setVida($qt_vida){
        $this->qt_vida = $qt_vida;
    }
    
    public function getDefesa(){
        return $this->qt_defesa;
    }
    
    public function setDefesa($qt_defesa){
        $this->qt_defesa = $qt_defesa;
    }
    
    public function getDano(){
        return $this->qt_dano;
    }
    
    public function setDano($qt_dano){
        $this->qt_dano = $qt_dano;
    }
    
    public function getVelAtaque(){
        return $this->qt_vel_ataque;
    }
    
    public function setVelAtaque($qt_vel_ataque){
        $this->qt_vel_ataque = $qt_vel_ataque;
    }
    
    public function getVelMovimento(){
        return $this->qt_vel_movimento;
    }
    
    public function setVelMovimento($qt_vel_movimento){
        $this->qt_vel_movimento = $qt_vel_movimento;
    }
    
    public function getUsuInclusao(){
        return $this->id_usu_inclusao;
    }
    
    public function setUsuInclusao($id_usu_inclusao){
        $this->id_usu_inclusao = $id_usu_inclusao;
    }
    
    public function getHRInclusao(){
        return dataMysqlParaPtBr($this->hr_inclusao);
    }
    
    public function setHRInclusao($hr_inclusao){
        $this->hr_inclusao = dataPtBrParaMysql($hr_inclusao);
    }
    
    public function getUsuAlteracao(){
        return $this->id_usu_alteracao;
    }
    
    public function setUsuAlteracao($id_usu_alteracao){
        $this->id_usu_alteracao = $id_usu_alteracao;
    }
    
    public function getHRAlteracao(){
        return dataMysqlParaPtBr($this->hr_alteracao);
    }
    
    public function setHRAlteracao($hr_alteracao){
        $this->hr_alteracao = dataPtBrParaMysql($hr_alteracao);
    }
    
    public function getAUpdate(){
        return $this->aUpdate;
    }
    
    public function setAUpdate(){
        $this->aUpdate = elements(array('nm_guerreiro','id_tp_guerreiro','de_esp_guerreiro','qt_vida','qt_defesa','qt_dano','qt_vel_ataque','qt_vel_movimento','id_usu_inclusao','hr_inclusao','id_usu_alteracao','hr_alteracao'), $this->getALL());
    }
    
    public function getALL(){
        if ($this->id_guerreiro<=0) :
            return array(
                    "nm_guerreiro" => $this->getNome(),
                    "id_tp_guerreiro" => $this->getTpGuerreiro(),
                    "de_esp_guerreiro" => $this->getEspGuerreiro(),
                    "qt_vida" => $this->getVida(),
                    "qt_defesa" => $this->getDefesa(),
                    "qt_dano" => $this->getDano(),
                    "qt_vel_ataque" => $this->getVelAtaque(),
                    "qt_vel_movimento" => $this->getVelMovimento(),
                    "id_usu_inclusao" => $this->getUsuInclusao(),
                    "hr_inclusao" => $this->getHRInclusao(),
                    "id_usu_alteracao" => $this->getUsuAlteracao(),
                    "hr_alteracao" => $this->getHRAlteracao()
                );
        
        endif;
        
        return array(
                    "id_guerreiro" => $this->getID(),
                    "nm_guerreiro" => $this->getNome(),
                    "id_tp_guerreiro" => $this->getTpGuerreiro(),
                    "de_esp_guerreiro" => $this->getEspGuerreiro(),
                    "qt_vida" => $this->getVida(),
                    "qt_defesa" => $this->getDefesa(),
                    "qt_dano" => $this->getDano(),
                    "qt_vel_ataque" => $this->getVelAtaque(),
                    "qt_vel_movimento" => $this->getVelMovimento(),
                    "id_usu_inclusao" => $this->getUsuInclusao(),
                    "hr_inclusao" => $this->getHRInclusao(),
                    "id_usu_alteracao" => $this->getUsuAlteracao(),
                    "hr_alteracao" => $this->getHRAlteracao()
                );
    }
    
    public function setALL($id, $nome, $tp_guerreiro, $esp_guerreiro, $vida, $dano, $defesa, $vel_ataque, $vel_movimento, $usu_inclusao, $hr_inclusao, $usu_alteracao, $hr_alteracao){        
        $this->setID($id);
        $this->setNome($nome);
        $this->setTpGuerreiro($tp_guerreiro);
        $this->setEspGuerreiro($esp_guerreiro);
        $this->setVida($vida); 
        $this->setDano($dano);
        $this->setDefesa($defesa);
        $this->setVelAtaque($vel_ataque);
        $this->setVelMovimento($vel_movimento);
        $this->setUsuInclusao($usu_inclusao);
        $this->setHRInclusao($hr_inclusao);
        $this->setUsuAlteracao($usu_alteracao);
        $this->setHRAlteracao($hr_alteracao);
        $this->setAUpdate();
    }
    
    public function salva() {
        //print_r($this->getALL());
        //sleep(50);
        $this->db->insert("guerreiro", $this->getALL());
    }
    
    public function atualiza() {
        $this->db->where("id_guerreiro", $this->getID());
        $this->db->update("guerreiro", $this->getAUpdate());
    }
    
    public function exclui() {
        $this->db->where("id_guerreiro", $this->getID());
        $this->db->delete("guerreiro");
    }
    
    public function buscaTodos(){
        $this->db->select("guerreiro.*, tipo_guerreiro.NM_TP_GUERREIRO");
        $this->db->from("guerreiro");
        $this->db->join("tipo_guerreiro", "tipo_guerreiro.id_tp_guerreiro=guerreiro.id_tp_guerreiro");
        $this->db->order_by('nm_guerreiro', 'ASC');
        return $this->db->get()->result_array();
    }
    
    public function busca($id){
        return $this->db->get_where("guerreiro", array("id_guerreiro" => $id))->row_array();
    }
    
    public function buscaTpGuerreiro(){
        $this->load->model("TpGuerreiro_model");
        $arrayTpGuerreiro = $this->TpGuerreiro_model->buscaTodos();
        return $arrayTpGuerreiro;
    }
    
}