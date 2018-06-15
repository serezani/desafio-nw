<div class="container">
    <h1>Tipos de Guerreiros - Excluir</h1>
    <?= validation_errors()?>
    <?php
    echo form_open("TpGuerreiro/excluir");

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
        "disabled" => "true",
        "maxlength" => "255",
        "value" => $arrayTpGuerreiro['NM_TP_GUERREIRO'],
        "placeholder" => "Ex.: José da Silva"
    ));
    echo '</div>';

    echo '<div class="form-group">';
    echo form_label("Descrição", "descricao");
    echo form_textarea(array(
        "name" => "descricao",
        "id" => "descricao",
        "class" => "form-control",
        "disabled" => "true",
        "require"=> "true",
        "maxlength" => "500",
        "value" => $arrayTpGuerreiro['DE_TP_GUERREIRO'],
        "placeholder" => "Ex.: Descrição detalhada do tipo de guerreiro"
    ));
    echo '</div>';
    
    echo '<div class="form-group">';
    echo '<div class="form-check">';
    echo form_checkbox(array(
        "name" => "status",
        "id" => "gridCheck",
        "class" => "form-check-input",
        "disabled" => "true",
        "require" => "true",
        "checked" => "true",
        "value" => $arrayTpGuerreiro['FG_STATUS']
    ));
    echo form_label("Ativo", "status");
    echo '</div>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_button(array(
        "name"=> "cadastrar",
        "class" => "btn btn-danger",
        "content" => "Excluir",
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