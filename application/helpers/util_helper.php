<?php

function chamaForm($pView,$pModel,$pArray1,$pId = 0,$pArray2 = FALSE){
    $usuarioLogado = autoriza();
    $ci = get_instance();
    $ci->load->model($pModel);
    
    if ($pId > 0)
        $array1 = $ci->$pModel->busca($pId);
    else $array1 = $ci->$pModel->buscaTodos($pId);
    
    if (!$pArray2) :
        $dados = array($pArray1 => $array1);
    else :
        $array2 = $ci->$pModel->buscaTpGuerreiro();
        $dados = array($pArray1 => $array1, $pArray2 => $array2);
    endif;
    $ci->load->template($pView,$dados); 
}

function efetivaExclusao($pRedirect, $pModel, $pId){
    $ci = get_instance();
    $ci->load->model($pModel);
    $ci->$pModel->setID($pId);
    $ci->$pModel->exclui();
    redirect($pRedirect);
}
