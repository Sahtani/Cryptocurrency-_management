<?php

class Wallets
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getWallet($userid)
    {
        $this->db->query("SELECT Quantité , User_ID FROM wallet WHERE User_ID = :User_ID");
        $this->db->bind(':User_ID', $userid);
        $wallet = $this->db->resultSet();
        return $wallet;
    }

    public function sendAmount($amount, $userId)
    {
        $this->db->query("UPDATE wallet SET Quantité = Quantité - :amount WHERE User_ID = :User_ID");
        $this->db->bind(':amount', $amount);
        $this->db->bind(':User_ID', $userId);
        $trans = $this->db->single();
        return $trans;
    }


}
