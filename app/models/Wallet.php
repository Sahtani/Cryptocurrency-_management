<?php

class WalletModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get user's wallet balance
    public function getBalance($user_id)
    {
        $this->db->query("SELECT Quantité FROM wallet WHERE user_id = :user_id");
        $this->db->bind(':user_id', $user_id);
        return $this->db->single()->balance;
    }

    // Deposit funds into the user's wallet
    public function deposit($user_id, $amount)
    {
        $this->db->query("UPDATE wallet SET Quantité = Quantité + :amount WHERE user_id = :user_id");
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':amount', $amount);

        return $this->db->execute();
    }

    // Withdraw funds from the user's wallet
    public function withdraw($user_id, $amount)
    {
        $balance = $this->getBalance($user_id);

        if ($balance >= $amount) {
            $this->db->query("UPDATE wallet SET Quantité = Quantité - :amount WHERE user_id = :user_id");
            $this->db->bind(':user_id', $user_id);
            $this->db->bind(':amount', $amount);

            return $this->db->execute();
        }
        return false; // Insufficient funds
    }
}
