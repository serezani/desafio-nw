<div class="container">
    <h1>Tipo de Guerreiros - Cadastrar</h1> 
    <?php
    
    echo form_open("TpGuerreiro/incluir");
    
    echo '<div class="form-group">';
    echo form_label("Nome", "nome"); 
    echo form_input(array(
        "name" => "nome",
        "id" => "nome",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: Arqueiro"
    ));
    echo '</div>';
    echo form_error("nome");
    
    echo '<div class="form-group">';
    echo form_label("Descrição", "descricao");
    echo form_textarea(array(
        "name" => "descricao",
        "id" => "descricao",
        "class" => "form-control",
        "maxlength" => "500",
        "placeholder" => "Ex.: Descrição detalhada do tipo de guerreiro"
    ));
    echo '</div>';
    echo form_error("descricao");
    
    echo '<div class="form-group">';
    echo '<div class="form-check">';
    echo form_checkbox(array(
        "name" => "status",
        "id" => "gridCheck",
        "class" => "form-check-input",
        "checked" => "true",
        "value" => "A"
    ));
    echo form_label("Ativo", "status");
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_button(array(
        "name"=> "cadastrar",
        "class" => "btn btn-primary",
        "content" => "Cadastrar",
        "type" => "submit"
    ));
    echo '&nbsp;';
    echo anchor('TpGuerreiro','Cancelar', array('class' => 'btn btn-default btn-secondary', 'role' => 'button'));
    echo '</div>';
    
    echo '<div class="form-group">';
    echo '</div>';
    
    echo form_close();
    ?>
</div>