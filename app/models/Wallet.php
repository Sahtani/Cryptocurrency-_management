<?php

class Wallet
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function displayWallet($userid)
    {
        $this->db->query("SELECT Quantité FROM wallet WHERE User_ID = :User_ID");
        $this->db->bind(':User_ID', $userid);
        return $wallet = $this->db->single();
    }

}
