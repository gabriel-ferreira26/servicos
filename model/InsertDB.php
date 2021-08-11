<?php

class InsertDB
{

    public function insertClient(
        $name,
        $lastName,
        $birth,
        $gender,
        $cpf,
    ) {
        require_once('Db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "INSERT INTO `cliente` (
                    `id_cliente`, 
                    `nome_cliente`, 
                    `sobrenome_cliente`, 
                    `nascimento_cliente`, 
                    `sexo_cliente`, 
                    `cpf_cliente`) VALUES (
                        NULL, 
                        '$name', 
                        '$lastName', 
                        '$birth', 
                        '$gender', 
                        '$cpf'
                    )";

        if (mysqli_query($link, $sql)) {
            echo '
                <div class="container">
                    <button type="button" class="btn btn-outline-success container">Usuario cadastrado com sucesso no sistema</button>
                </div>';
            return ($idInserted = mysqli_insert_id($link));
        } else {
            echo "
                <div class='container'>
                    <button type='button' class='btn btn-outline-danger container'>Erro ao cadastrar usuario no sistema</button>
                </div>";
        }
    }

    public function insertAddress(
        $idClient,
        $street,
        $district,
        $cep,
        $city,
        $state
    ) {
        require_once('Db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "INSERT INTO `endereco_cliente` (
                `idendereco_cliente`, 
                `rua_endereco_cliente`, 
                `bairro_endereco_cliente`, 
                `cep_endereco_cliente`, 
                `cidade_endereco_cliente`, 
                `estado_endereco_cliente`, 
                `cliente_id_cliente`) VALUES (
                    NULL,
                    '$street', 
                    '$district', 
                    '$cep',
                    '$city', 
                    '$state', 
                    $idClient)";

        if (mysqli_query($link, $sql)) {
            echo '
                <div class="container">
                    <button type="button" class="btn btn-outline-success container">Endereço do cliente cadastrado com sucesso</button>
                </div>';
        } else {
            echo "
                <div class='container'>
                    <button type='button' class='btn btn-outline-danger container'>Erro ao cadastrar endereço no sistema</button>
                </div>";
        }
    }

    public function insertContact(
        $idClient,
        $email,
        $phone
    ) {
        require_once('Db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "INSERT INTO `contato_cliente` (
                    `idcontato_cliente`, 
                    `email_contato_cliente`, 
                    `telefone_contato_cliente`,
                    `id_cliente`) VALUES (
                        NULL, 
                        '$email', 
                        '$phone', 
                        $idClient)";

        if (mysqli_query($link, $sql)) {
            echo '
                <div class="container">
                    <button type="button" class="btn btn-outline-success container">Contato do cliente cadastrado com sucesso</button>
                </div>';
        } else {
            echo "
                <div class='container'>
                    <button type='button' class='btn btn-outline-danger container'>Erro ao cadastrar contato no sistema</button>
                </div>";
        }
    }

    public function insertTechnician(
        $name,
        $lastName,
        $nickName,
        $email,
        $password,
        $cpf,
    ) {
        require_once('Db/Db.php');
        $db = new Db();

        $link = $db->conecta_mysql();

        $sql = "INSERT INTO `tecnico` (
            `id_tecnico`, 
            `nome_tecnico`, 
            `sobrenome_tecnico`, 
            `nick_tecnico`, 
            `email_tecnico`, 
            `senha_tecnico`, 
            `cpf_tecnico`) VALUES (
                NULL, 
                '$name',
                '$lastName', 
                '$nickName', 
                '$email', 
                '$password', 
                '$cpf')
        ";

        if (mysqli_query($link, $sql)) {
            echo '
                <div class="container">
                    <button type="button" class="btn btn-outline-success container">Tecnico cadastrado com sucesso no sistema</button>
                </div>';
        } else {
            echo "
                <div class='container'>
                    <button type='button' class='btn btn-outline-danger container'>Erro ao cadastrar tecnico no sistema</button>
                </div>";
        }
    }

    public function insertOs(
        $idClient,
        $type,
        $amount,
        $description,
        $idTechnician
    ) {
        require_once('Db/Db.php');
        $db = new Db();
        $link = $db->conecta_mysql();
        date_default_timezone_set("America/Sao_Paulo");
        $dateTime = date('Y/m/d H:i:s');
        $sql = "INSERT INTO `ordem` (
                    `id_ordem`,
                    `id_cliente`, 
                    `tecnico_id_tecnico`, 
                    `tipo_equipamento_os`, 
                    `quantidade_equipamento_os`,
                    `descricao_os`, 
                    `data_os`) VALUES (
                        NULL, 
                        $idClient, 
                        $idTechnician, 
                        '$type', 
                        $amount, 
                        '$description',  
                        '$dateTime')";

        if (mysqli_query($link, $sql)) {
            $idInserted = mysqli_insert_id($link);
            echo '
                <div class="container">
                    <button type="button" class="btn btn-outline-success container">OS cadastrada com sucesso! Nº da OS: '.$idInserted.'</button>
                </div>';
        } else {
            echo "
                <div class='container'>
                    <button type='button' class='btn btn-outline-danger container'>Erro ao cadastrar OS no sistema</button>
                </div>";
        }
    }
}
