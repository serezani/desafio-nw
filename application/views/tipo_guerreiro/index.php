 <div class="row">
    <div class="col-md-12">
    

        <h2>Tipos de Guerreiros</h2>
        <?= anchor('TpGuerreiro/novo', 'Inserir', array('class' => 'btn btn-primary', 'role' => 'button'))?>
        <br><br>
        <div class="table-responsive">
            <table class="table">
            <thead class="bg-light">
                <tr>
                    <th scope="col">ID</td>
                    <th scope="col">NOME</td>
                    <th scope="col">DESCRIÇÃO</td>    
                    <th colspan="2" scope="col">STATUS</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($arrayTpGuerreiro as $tpGuerreiro) : ?>
            
                <tr>
                    <th scope="row"><?=$tpGuerreiro["ID_TP_GUERREIRO"] ?></td>
                    <td><?=html_escape($tpGuerreiro["NM_TP_GUERREIRO"]) ?></td>
                    <td><?=character_limiter(html_escape($tpGuerreiro["DE_TP_GUERREIRO"]),50) ?></td>
                    <td><?php 
                    if (html_escape($tpGuerreiro["FG_STATUS"]) == 'A') { 
                    echo 'Ativo';}
                    else {echo 'Inativo';} ?></td>
                    <td><?= anchor('TpGuerreiro/formModifica?id='.$tpGuerreiro["ID_TP_GUERREIRO"],'alterar', array('class' => 'btn btn-success btn-sm', 'role' => 'button'));
            ?>&nbsp;
                    <?= anchor('TpGuerreiro/formExclui?id='.$tpGuerreiro["ID_TP_GUERREIRO"],'excluir', array('class' => 'btn btn-danger btn-sm', 'role' => 'button'));
    ?></td>
                </tr>
            
        <?php endforeach ?>
            </tbody>
        </table>
        </div>    
    </div>
</div>