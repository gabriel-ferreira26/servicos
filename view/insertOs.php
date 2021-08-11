<?php
include __DIR__ . '\header.html';
require_once('../controller/Inserts.php');
require_once('../controller/Searchs.php');
$obInsert = new Insert();
$obSearchs = new Searchs();

$queryClients = $obSearchs->searchClients();
$queryTechnician = $obSearchs->searchTechnician();
if($_POST){
    $obInsert->reqInfoOs();
}
?>

<div class="container form-group">
    <h2>Cadastrar nova OS</h2>
    <hr style="border-top: 1px solid #fff">

    <form action="#" method="POST">
        <div class="row">
            <div class="col col-md-4">
                <label for="client">Cliente:</label>
                <select id="client" name="idClient" class="form-control">
                    <option>Selecione um cliente</option>
                    <?php while($var = mysqli_fetch_array($queryClients)){?>
                        <option value="<?=$var['id_cliente']?>" style="justify-content: space-between;">
                            <p><?=$var['id_cliente']?></p> -
                            <p><?=$var['nome_cliente'].' '.$var['sobrenome_cliente']?></p>
                        </option>
                    <?php };?>
                </select>
            </div>
            <div class="col col-md-6">
                <label for="type">Tipo de equipamento:</label>
                <input type="text" id="type" name="type" class="form-control" required />
            </div>
            <div class="col col-md-2">
                <label for="amount">Quantidade de itens:</label>
                <input type="number" id="amount" name="amount" class="form-control" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="description">Descrição da OS:</label>
                <textarea id="description" name="description" class="form-control" rows="4" placeholder="Dica: Descreva detalhadamente a ordem de serviço e todos os itens" required></textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="technician">Tecnico designado:</label>
                <select id="client" name="idTechnician" class="form-control">
                    <option>Selecione um Tecnico</option>
                    <?php while($var = mysqli_fetch_array($queryTechnician)){?>
                        <option value="<?=$var['id_tecnico']?>" style="justify-content: space-between;">
                            <p><?=$var['id_tecnico']?></p> -
                            <p><?=$var['nome_tecnico'].' '.$var['sobrenome_tecnico']?></p>
                        </option>
                    <?php };?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Cadastrar os</button>

    </form>

</div>

<?php
include __DIR__ . '\footer.html';
?>