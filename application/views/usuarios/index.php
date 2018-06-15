 <div class="row">
    <div class="col-md-12">
    

        <h2>Usuários</h2>
        <?= anchor('usuarios/novo', 'Inserir', array('class' => 'btn btn-primary', 'role' => 'button'))?>
        <br><br>
        <table class="table">
            <thead class="bg-light">
                <tr>
                    <th scope="col">ID</td>
                    <th scope="col">NOME</td>
                    <th colspan="2" scope="col">E-MAIL</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($arrayUsuarios as $usuario) : ?>
            
                <tr>
                    <th scope="row"><?=$usuario["ID_USUARIO"] ?></td>
                    <td class="hidden-480"><?=html_escape($usuario["NM_USUARIO"]) ?></td>
                    <td class="hidden-480"><?=html_escape($usuario["DE_EMAIL"]) ?></td>
                    <td><?= anchor('usuarios/formModifica?id='.$usuario["ID_USUARIO"],'alterar', array('class' => 'btn btn-success btn-sm', 'role' => 'button'));
            ?>&nbsp;
                    <?= anchor('usuarios/formExclui?id='.$usuario["ID_USUARIO"],'excluir', array('class' => 'btn btn-danger btn-sm', 'role' => 'button'));
    ?></td>
                </tr>
            
        <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>