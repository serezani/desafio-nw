<div class="container">
    <h1>Guerreiros - Excluir</h1>
    <?= validation_errors()?>
    <?php
    
    echo form_open("Guerreiros/excluir");

    echo '<div class="form-group">';
    echo form_label("ID", "id"); 
    echo form_input(array(
        "name" => "id",
        "id" => "id",
        "class" => "form-control",
        "readonly" => "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['ID_GUERREIRO'],
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
        "require"=> "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['NM_GUERREIRO'],
        "placeholder" => "Ex.: Steven"
    ));
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label("Tipo de Guerreiro", "tp_guerreiro");
    
    //print_r($arrayTpGuerreiro);
    ?>
    
    <select id="tp_guerreiro" name="tp_guerreiro" class="form-control" disabled="true">
       <option value="0" selected>Selecione o tipo de guerreiro...</option>
    <?php foreach($arrayTpGuerreiro as $TpGuerreiro) : 
        $selected = '';
        if ($TpGuerreiro["ID_TP_GUERREIRO"] == $arrayGuerreiro["ID_TP_GUERREIRO"]) {
            $selected = 'selected';    
        }
            
    ?>
       <option <?=$selected?> value=<?=$TpGuerreiro['ID_TP_GUERREIRO']?>><?=$TpGuerreiro['NM_TP_GUERREIRO']?></option>
    <?php
        endforeach;
    ?>
    </select>
    
    <?php
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label("Especialidade", "especialidade"); 
    echo form_input(array(
        "name" => "especialidade",
        "id" => "especialidade",
        "class" => "form-control",
        "disabled" => "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['DE_ESP_GUERREIRO'],
        "placeholder" => "Ex.: Magia Branca, Cura e etc"
    ));
    echo '</div>';
    
    echo '<div class="form-row">';
    echo '<div class="form-group col-md-2">';
    echo form_label("Vida", "vida"); 
    echo form_input(array(
        "name" => "vida",
        "id" => "vida",
        "class" => "form-control",
        "require"=> "true",
        "disabled" => "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['QT_VIDA'],
        "placeholder" => "Ex.: 2900"
    ));
    echo '</div>';
    
    echo '<div class="form-group col-md-2">';
    echo form_label("Defesa", "defesa"); 
    echo form_input(array(
        "name" => "defesa",
        "id" => "defesa",
        "class" => "form-control",
        "disabled" => "true",
        "require"=> "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['QT_DEFESA'],
        "placeholder" => "Ex.: 300"
    ));
    echo '</div>';
    
    echo '<div class="form-group col-md-2">';
    echo form_label("Dano", "dano"); 
    echo form_input(array(
        "name" => "dano",
        "id" => "dano",
        "class" => "form-control",
        "disabled" => "true",
        "require"=> "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['QT_DANO'],
        "placeholder" => "Ex.: 250"
    ));
    echo '</div>';
    
    
    echo '<div class="form-group col-md-3">';
    echo form_label("Velocidade de Ataque", "ataque"); 
    echo form_input(array(
        "name" => "ataque",
        "id" => "ataque",
        "class" => "form-control",
        "disabled" => "true",
        "require"=> "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['QT_VEL_ATAQUE'],
        "placeholder" => "Ex.: 1.3"
    ));
    echo '</div>';
    
    echo '<div class="form-group col-md-3">';
    echo form_label("Velocidade de Movimento", "movimento"); 
    echo form_input(array(
        "name" => "movimento",
        "id" => "movimento",
        "class" => "form-control",
        "disabled" => "true",
        "require"=> "true",
        "maxlength" => "255",
        "value" => $arrayGuerreiro['QT_VEL_MOVIMENTO'],
        "placeholder" => "Ex.: 330"
    ));
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
    echo anchor('Guerreiros','Cancelar', array('class' => 'btn btn-default btn-secondary', 'role' => 'button'));
    echo '</div>';

    echo '<div class="form-group">';
    echo '</div>';

    echo form_close();
    
    ?>
</div>