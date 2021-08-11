<?php

class Db{

    private $host = 'localhost:3306';
    private $user = 'root';
    private $pass = '';
    private $database = 'ordem_servico';

    /**
     * Função de conexão com o banco de dados 
     */
    public function conecta_mysql(){
        $connect = mysqli_connect(
            $this -> host,
            $this -> user,
            $this -> pass,
            $this -> database
        );

        mysqli_set_charset(
            $connect,
            'utf8'
        );

        if(mysqli_connect_errno()){
            echo "Database connection error".mysqli_connect_errno();
        }

        return $connect;
    }
}