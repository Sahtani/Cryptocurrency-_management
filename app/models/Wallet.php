<?php

class Wallet
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get user's wallet balance
    public function getBalance($user_id)
    {
        $this->db->query("SELECT Quantité FROM wallet WHERE ");
        $this->db->bind(':user_id', $user_id);
        return $this->db->single()->Quantité;
    }

}
