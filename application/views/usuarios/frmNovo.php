<div class="container">
    <h1>Usuários - Cadastrar</h1>
    <?php
    
    echo form_open("usuarios/incluir");
    
    echo '<div class="form-group">';
    echo form_label("Nome", "nome"); 
    echo form_input(array(
        "name" => "nome",
        "id" => "nome",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: José da Silva"
    ));
    echo '</div>';
    echo form_error("nome");
    
    echo '<div class="form-group">';
    echo form_label("Email", "email");
    echo form_input(array(
        "name" => "email",
        "id" => "email",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: exemplo@email.com.br"
    ));
    echo '</div>';
    echo form_error("email");
    
    echo '<div class="form-group">';
    echo form_label("Senha", "senha");
    echo form_password(array(
        "name" => "senha",
        "id" => "senha",
        "class" => "form-control",
        "maxlength" => "255"
    ));
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_button(array(
        "name"=> "cadastrar",
        "class" => "btn btn-primary",
        "content" => "Cadastrar",
        "type" => "submit"
    ));
    echo '&nbsp;';
    echo anchor('usuarios','Cancelar', array('class' => 'btn btn-default btn-secondary', 'role' => 'button'));
    echo '</div>';
    
    echo '<div class="form-group">';
    echo '</div>';
    
    echo form_close();
    ?>
</div>