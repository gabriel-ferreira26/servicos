<?php

class Searchs{
    public function searchClients(){
        require_once('../model/Search.php');
        $obSearch = new Search();

        return $obSearch->searchClient();
    }

    public function searchTechnician(){
        require_once('../model/Search.php');
        $obSearch = new Search();

        return $obSearch->searchTechnician();
    }

    public function searchOs($id){
        require_once('../model/Search.php');
        $obSearch = new Search();

        return $obSearch->searchDataOs($id);
    }
}