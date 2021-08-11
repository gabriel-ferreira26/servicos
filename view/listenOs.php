<?php

require_once('../controller/Searchs.php');
$obSearch = new Searchs();

$query = $obSearch->searchOs(NULL);
?>

<section class="table-container container">
    <h1>Ordens de Serviço:</h1>
    <div>
        <table class="table bg-light container">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($var = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <th><?= $var['id_ordem'] ?></th>
                        <th><?= $var['nome_cliente'] . '' . $var['sobrenome_cliente'] ?></th>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</section>