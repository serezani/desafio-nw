
        <h2>Guerreiros</h2>
        <div class="container">
          <?php foreach ($arrayGuerreiro as $guerreiro) : ?>  
            <div class="row">
                <div class="col-sm">
                    <img src="../../../assets/img/'.<?=html_escape($guerreiro["NM_GUERREIRO"])?>.'/1.gif" class="img-thumbnail">    
                </div>
                <div class="col-sm">
                    <ul>
                        <li>Nome: <?=html_escape(strtoupper($guerreiro["NM_GUERREIRO"])) ?></li>
                        <li>Tipo de Guerreiro: <?=html_escape(strtoupper($guerreiro["ID_TP_GUERREIRO"])) ?></li>
                        <li>Especialidade: <?=html_escape($guerreiro["DE_ESP_GUERREIRO"]) ?></li>
                        <li>Vida: <?=html_escape($guerreiro["QT_VIDA"]) ?></li>
                        <li>Defesa: <?=html_escape($guerreiro["QT_DEFESA"]) ?></li>
                        <li>Dano: <?=html_escape($guerreiro["QT_DANO"]) ?></li>
                        <li>Velocidade de Ataque: <?=html_escape($guerreiro["QT_VEL_ATAQUE"]) ?></li>
                        <li>Velocidade de movimento: <?=html_escape($guerreiro["QT_VEL_MOVIMENTO"]) ?></li>
                    </ul>    

                </div>
            </div>
          <?php endforeach;?>  
        </div>
        