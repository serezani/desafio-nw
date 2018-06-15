<div class="container">
    <h1>Tipos de Guerreiros - Alterar</h1>
    <?php
    echo form_open("TpGuerreiro/modifica");

    echo '<div class="form-group">';
    echo form_label("ID", "id"); 
    echo form_input(array(
        "name" => "id",
        "id" => "id",
        "class" => "form-control",
        "readonly" => "true",
        "maxlength" => "255",
        "value" => $arrayTpGuerreiro['ID_TP_GUERREIRO'],
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
        "value" => $arrayTpGuerreiro['NM_TP_GUERREIRO'],
        "placeholder" => "Ex.: José da Silva"
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
        "value" => $arrayTpGuerreiro['DE_TP_GUERREIRO'],
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
        "value" => $arrayTpGuerreiro['FG_STATUS']
    ));
    echo form_label("Ativo", "status");
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_button(array(
        "name"=> "cadastrar",
        "class" => "btn btn-success",
        "content" => "Alterar",
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