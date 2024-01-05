<?php

class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function displayCoin()
    {
        $this->db->query("SELECT * FROM coins");
        $row = $this->db->resultSet();
        return $row;
    }

    // public function displaywatchlist(){
    //     $this->db->query("SELECT * FROM cryptomonnaies");
    //     $row = $this->db->resultSet();
    //     return $row;
    // }

    public function addfavorite($userid, $coinsid)
    {
        $this->db->query("INSERT INTO watchlist VALUES (:user_id, :cryptomonnaie_id)");
        $this->db->bind('user_id', $userid);
        $this->db->bind('cryptomonnaie_id', $coinsid);
        
    }
}
