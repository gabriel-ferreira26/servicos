<?php

class Insert
{

    public function resClient()
    {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $birth = $_POST['birth'];
        $gender = $_POST['gender'];
        $cpf = $_POST['cpf'];

        return($this->insertClient($name, $lastName, $birth, $gender, $cpf));
    }

    public function reqAdress($idClient)
    {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $cep = $_POST['cep'];
        $state = $_POST['state'];
        $number = $_POST['number'];

        $street = $street.' '.$number;

        $this->insertAdress($idClient, $street, $district, $cep, $city, $state);
    }

    public function reqContacts($idClient)
    {
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $this->insertContact($idClient, $email, $phone);
    }

    public function reqTechnician()
    {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $nickName = $_POST['nickName'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->insertTechnician(
            $name,
            $lastName,
            $nickName,
            $email,
            $password,
            $cpf
        );
    }

    public function reqInfoOs(){
        $idClient = $_POST['idClient'];
        $type = $_POST['type'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        $idTechnician = $_POST['idTechnician'];

        $this->insertOs($idClient, $type, $amount, $description, $idTechnician);
    }

    private function insertClient($name, $lastName, $birth, $gender, $cpf)
    {
        require_once('../model/InsertDB.php');
        $obInsert = new InsertDB();

        return ($var = $obInsert->insertClient($name, $lastName, $birth, $gender, $cpf));
    }

    private function insertTechnician( $name, $lastName, $nickName, $email, $password, $cpf) 
    {
        require_once('../model/InsertDB.php');
        $obInsert = new InsertDB();

        $obInsert->insertTechnician(
            $name,
            $lastName,
            $nickName,
            $email,
            $password,
            $cpf,
        );
    }

    private function insertAdress($idClient, $street, $district, $cep, $city, $state)
    {
        require_once('../model/InsertDB.php');
        $obInsert = new InsertDB();

        $obInsert->insertAddress($idClient, $street, $district, $cep, $city, $state);
    }

    private function insertContact($idClient, $email, $phone)
    {
        require_once('../model/InsertDB.php');
        $obInsert = new InsertDB();

        $obInsert->insertContact($idClient, $email, $phone);
    }

    private function insertOs($idClient, $type, $amount, $description, $idTechnician)
    {
        require_once('../model/InsertDB.php');
        $obInsert = new InsertDB();

        $obInsert->insertOs($idClient, $type, $amount, $description, $idTechnician);
    }
}
