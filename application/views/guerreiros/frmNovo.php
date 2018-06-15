<div class="container">
    <h1>Guerreiros - Cadastrar</h1>
    <?php
    
    echo form_open("Guerreiros/incluir");
    
    echo '<div class="form-group">';
    echo form_label("Nome", "nome"); 
    echo form_input(array(
        "name" => "nome",
        "id" => "nome",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: Steven"
    ));
    echo '</div>';
    echo form_error("nome");
    
    echo '<div class="form-group">';
    echo form_label("Tipo de Guerreiro", "tp_guerreiro");
    ?>
    
    <select id="tp_guerreiro" name="tp_guerreiro" class="form-control">
       <option value="0" selected>Selecione o tipo de guerreiro...</option>
    <?php foreach($arrayTpGuerreiro as $TpGuerreiro) : ?>
       <option value=<?=$TpGuerreiro['ID_TP_GUERREIRO']?>><?=$TpGuerreiro['NM_TP_GUERREIRO']?></option>
    <?php
        endforeach;
    ?>
    </select>
    
    <?php
    echo '</div>';
    echo form_error("tp_guerreiro");
    
    echo '<div class="form-group">';
    echo form_label("Especialidade", "especialidade"); 
    echo form_input(array(
        "name" => "especialidade",
        "id" => "especialidade",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: Magia Branca, Cura e etc"
    ));
    echo '</div>';
    echo form_error("especialidade");
    
    echo '<div class="form-row">';
    echo '<div class="form-group col-md-2">';
    echo form_label("Vida", "vida"); 
    echo form_input(array(
        "name" => "vida",
        "id" => "vida",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: 2900"
    ));
    echo '</div>';
    echo form_error("vida");
    
    echo '<div class="form-group col-md-2">';
    echo form_label("Defesa", "defesa"); 
    echo form_input(array(
        "name" => "defesa",
        "id" => "defesa",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: 300"
    ));
    echo '</div>';
    echo form_error("defesa");
    
    echo '<div class="form-group col-md-2">';
    echo form_label("Dano", "dano"); 
    echo form_input(array(
        "name" => "dano",
        "id" => "dano",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: 250"
    ));
    echo '</div>';
    echo form_error("dano");
    
    echo '<div class="form-group col-md-3">';
    echo form_label("Velocidade de Ataque", "ataque"); 
    echo form_input(array(
        "name" => "ataque",
        "id" => "ataque",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: 1.3"
    ));
    echo '</div>';
    echo form_error("ataque");
    
    echo '<div class="form-group col-md-3">';
    echo form_label("Velocidade de Movimento", "movimento"); 
    echo form_input(array(
        "name" => "movimento",
        "id" => "movimento",
        "class" => "form-control",
        "maxlength" => "255",
        "placeholder" => "Ex.: 330"
    ));
    echo '</div>';
    echo form_error("movimento");
    echo '</div>';
    
    echo '<div class="form-group">';
    echo form_label("Fotos", "fotos"); 
    echo form_upload(array(
        "name" => "fileUpload[]",
        "id" => "fileUpload",
        "class" => "form-control",
        "multiple" => "true",
        "maxlength" => "255"
    ));
    echo '</div>';
    echo form_error("fotos");
    
    echo '<div class="form-group">';
    echo form_button(array(
        "name"=> "cadastrar",
        "class" => "btn btn-primary",
        "content" => "Cadastrar",
        "type" => "submit"
    ));
    echo '&nbsp;';
    echo anchor('Guerreiros','Cancelar', array('class' => 'btn btn-default btn-secondary', 'role' => 'button'));
    echo '</div>';
    
    
    echo form_close();
    ?>
</div>