 <div class="row">
    <div class="col-md-12">
    
        <h2>Guerreiros</h2>
        
        <?= anchor('Guerreiros/novo', 'Inserir', array('class' => 'btn btn-primary', 'role' => 'button'))?>
        <br><br>
        <div class="table-responsive">
            <table class="table">
            <thead class="bg-light">
                <tr>
                    <th scope="col">ID</td>
                    <th scope="col">NOME</td>
                    <th scope="col">TIPO DE GUERREIRO</td>    
                    <th colspan="2" scope="col">ESPECIALIDADE</td>
                </tr>
            </thead>
            <tbody>

            <?php foreach($arrayGuerreiro as $guerreiro) : ?>
                
                <tr>
                    <th scope="row"><?=$guerreiro["ID_GUERREIRO"] ?></td>
                    <td><?=html_escape($guerreiro["NM_GUERREIRO"]) ?></td>
                    <td><?=html_escape($guerreiro["NM_TP_GUERREIRO"]) ?></td>
                    <td><?=html_escape($guerreiro["DE_ESP_GUERREIRO"]) ?></td>
                    <td><?= anchor('Guerreiros/formModifica?id='.$guerreiro["ID_GUERREIRO"],'alterar', array('class' => 'btn btn-success btn-sm', 'role' => 'button'));
            ?>&nbsp;
                    <?= anchor('Guerreiros/formExclui?id='.$guerreiro["ID_GUERREIRO"],'excluir', array('class' => 'btn btn-danger btn-sm', 'role' => 'button'));
    ?></td>
                </tr>
            
        <?php endforeach ?>
            </tbody>
        </table>
        </div>    
    </div>
</div>