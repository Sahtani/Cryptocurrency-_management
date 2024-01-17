<?php

class Watchlists{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function addFavorite($userid, $coinsid)
    {
        $result = $this->checkIfFavorite($userid, $coinsid);    
        $this->db->query($result);
        $this->db->bind('user_id', $userid);
        $this->db->bind('cryptomonnaie_id', $coinsid);
        $this->db->execute();
        
    }

    public function checkIfFavorite($userid, $coinsid){
        $this->db->query("SELECT * FROM watchlist WHERE user_id = $userid AND cryptomonnaie_id = $coinsid");
        $this->db->execute();
        $rows = $this->db->rowCount();
        if($rows > 0){
            return 'DELETE FROM watchlist WHERE user_id = :user_id AND cryptomonnaie_id = :cryptomonnaie_id';
        }else return 'INSERT INTO watchlist VALUES (null,:user_id, :cryptomonnaie_id)';
    }
    public function displayCoinss($userid)
    {
        $this->db->query("SELECT * FROM cryptomonnaies INNER JOIN watchlist ON cryptomonnaies.User_ID = watchlist.Cryptomonnaie_ID AND watchlist.User_ID = $userid ");
        $row = $this->db->resultSet();
      
        return $row;
    }
    
    
}