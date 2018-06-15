<div class="container">
    <h1>Usuários - Alterar</h1>
    <?php
    echo form_open("usuarios/modifica");

    echo '<div class="form-group">';
    echo form_label("ID", "id"); 
    echo form_input(array(
        "name" => "id",
        "id" => "id",
        "class" => "form-control",
        "readonly" => "true",
        "maxlength" => "255",
        "value" => $arrayUsuario['ID_USUARIO'],
        "placeholder" => "Ex.: José da Silva"
    ));
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label("Nome", "nome"); 
    echo form_input(array(
        "name" => "nome",
        "id" => "nome",
        "class" => "form-control",
        "maxlength" => "255",
        "value" => $arrayUsuario['NM_USUARIO'],
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
        "value" => $arrayUsuario['DE_EMAIL'],
        "placeholder" => "Ex.: exemplo@email.com.br"
    ));
    echo '</div>';
    echo form_error("email");

    echo '<div class="form-group">';
    echo form_button(array(
        "name"=> "cadastrar",
        "class" => "btn btn-success",
        "content" => "Alterar",
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