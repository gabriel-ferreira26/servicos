<?php

class Search
{

    public function searchClient()
    {
        require_once('Db/Db.php');
        $db = new Db;

        $link = $db->conecta_mysql();

        $sql = "SELECT * FROM `cliente`";

        if ($query = mysqli_query($link, $sql)) {
            return $query;
        } else {
            echo 'Erro ao fazer a busca';
        }
    }

    public function searchTechnician()
    {
        require_once('Db/Db.php');
        $db = new Db;

        $link = $db->conecta_mysql();

        $sql = "SELECT * FROM `tecnico`";

        if ($query = mysqli_query($link, $sql)) {
            return $query;
        } else {
            echo 'Erro ao fazer a busca';
        }
    }

    public function searchDataOs($id)
    {
        require_once('Db/Db.php');
        $db = new Db;

        $link = $db->conecta_mysql();


        $sql = "SELECT `ordem`.*, `tecnico`.*, `cliente`.* FROM `ordem`
                INNER JOIN `tecnico` ON `ordem`.`tecnico_id_tecnico` = `tecnico`.`id_tecnico`
                INNER JOIN `cliente` ON `ordem`.`id_cliente` = `ordem`.`id_cliente`";
        
        if ($query = mysqli_query($link, $sql)) {
            return $query;
        } else {
            echo 'Erro ao fazer a busca';
        }
    }
}
