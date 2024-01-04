<?php 

class User  {

private $db;

public function __construct(){
    $this->db = new Database;

}

public function displayCoin()
{
    $this->db->query("SELECT * FROM coins");
    $row = $this->db->resultSet();
    return $row;
}

public function displaywatchlist(){
    $this->db->query("SELECT * FROM cryptomonnaies");
    $row = $this->db->resultSet();
    return $row;
}

}