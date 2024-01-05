<?php

class Wallets
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getWallet()
    {
        $this->db->query("SELECT Quantité , User_ID FROM wallet WHERE User_ID = 99999");
        $wallet = $this->db->single();
        return $wallet;
    }


}
