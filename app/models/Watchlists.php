<?php

class Watchlists
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function checkIfFavorite($coinsid, $userid)
    {
        $this->db->query("SELECT * FROM watchlist WHERE User_ID = $userid AND Cryptomonnaie_ID = $coinsid");
        $this->db->execute();
        $rows = $this->db->rowCount();
        if ($rows > 0) {
            return 'DELETE FROM watchlist WHERE User_ID = :user_id AND Cryptomonnaie_ID = :cryptomonnaie_id';
        } else {
            return 'INSERT INTO watchlist VALUES (null, :user_id, :cryptomonnaie_id)';
        }
    }

    
    public function addFavorite($coinsid, $userid)
    {
        $result = $this->checkIfFavorite($coinsid, $userid);
        $this->db->query($result);
        $this->db->bind('user_id', $userid);
        $this->db->bind('cryptomonnaie_id', $coinsid); 
        $this->db->execute();
    }

    

    public function displayCoinss($userid)
    {
        $this->db->query("SELECT * FROM cryptomonnaies INNER JOIN watchlist ON cryptomonnaies.CryptomonnaieID  = watchlist.Cryptomonnaie_ID AND watchlist.User_ID = $userid ");
        $row = $this->db->resultSet();

        return $row;
    }
    
    public function getUserWatchlist($user_id, $cryptoData)
    {
        $sql = "SELECT * FROM watchlist WHERE user_id = :user_id";
        $data = ['user_id' => $user_id];
        $result = $this->db->query_data($sql, $data)->fetchAll(PDO::FETCH_ASSOC);

        $watchlistData = [];
        foreach ($result as $watchlistItem) {
            $cryptoDataItem = array_filter($cryptoData, function ($crypto) use ($watchlistItem) {
                return $crypto['id'] == $watchlistItem['Cryptomonnaie_ID'];
            });

            if (!empty($cryptoDataItem)) {
                $watchlistData[] = reset($cryptoDataItem);
            }
        }

        return $watchlistData;
    }
    
}
