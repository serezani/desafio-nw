<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <title>Desafio - NewWay</title>
        <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
       
    </head>
    <body>
        
        <div class="container">
            <div class="container bg-light">
            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php 
                  endif;  
                  if($this->session->flashdata("danger")) : 
            ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif;    
                  if($this->session->userdata("usuario_logado")) : 
                      echo 'Olá, ' . $this->session->userdata("usuario_logado")['NM_USUARIO']. '  ';        
                      echo anchor('login/logout','Logout', array("class" => "btn btn-primary btn-sm"))    ;
                  else :?> 
                
            <?php
                    echo form_open("login/autenticar", array("class" => "form-inline"));
                    
                    echo '<div class="form-group mb-2"';
                    
                    echo form_label("Email: ","email", array("class"=>"sr-only")); 
                    echo form_input(array(
                        "name" => "email",
                        "id" => "email",
                        "class" => "form-control",
                        "require"=> "true",
                        "maxlength" => "255",
                        "type" => "email",
                        "placeholder" => "Ex.: email@exemplo.com.br"
                    ));
                    echo '</div>';
                    
                    echo '<div class="form-group mx-sm-3 mb-2">';
                    echo form_label("Senha","senha", array("class"=>"sr-only"));
                    echo form_password(array(
                        "name" => "senha",
                        "id" => "senha",
                        "class" => "form-control",
                        "require"=> "true",
                        "maxlength" => "255"
                    ));
                    echo '</div>';
                    
                    //echo '<div class=" mx-sm-3 mb-2">';
                    echo form_button(array(
                        "name"=> "cadastrar",
                        "class" => "btn btn-primary mb-2",
                        "content" => "Login",
                        "type" => "submit"
                    ));
                    
                    echo form_close();
              ?>
            </div> 
            <?php endif ?>
            <br>
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="navbar-brand">Desafio - NewWay</div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <?= anchor('home','Home', array("class" => "nav-item nav-link active"))?>  
                  <span class="sr-only">(current)</span></a>
                  
                  <?php 
                  if ($this->session->userdata("usuario_logado")) :
                        echo anchor('usuarios','Usuários', array("class" => "nav-item nav-link"));
                        echo anchor('tpguerreiro','Tipos Guerreiros', array("class" => "nav-item nav-link"));
                        echo anchor('guerreiros','Guerreiros', array("class" => "nav-item nav-link"));
                  endif
                  ?>
                </div>
              </div>

            </nav>
        </div>    
        <div class="container">



