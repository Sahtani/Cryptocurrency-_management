<?php
class Wallet
{
    public $User_ID;
    public $Quantité;
    public $Crypto_id;
    public $user_id;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function checkCoin($Crypto_id, $userid)
    {
        $this->db->query("SELECT * FROM wallet where  user_id = $userid and Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
        if ($row > 0) {
            return $row;
        }
    }


    public function insertWallet($user_id)
    {   
        $this->db->query("INSERT into wallet (User_ID,Quantité,Crypto_id) values(:User_ID,:Quantité,:Crypto_id)");
        $this->db->bind($user_id, $this->Quantité, $this->Crypto_id);
        $row = $this->db->resultSet();
        return $row;
    }
    public function updateWallet($Crypto_id,$newQuantite)
    {

        $this->db->query("UPDATE  wallet  set Quantité=Quantité+$newQuantite where Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
    }

    



    public function sendCoins($senderID, $recipientID, $amount) {
        $senderBalance = $this->getUserBalance($senderID);
    
        if ($senderBalance < $amount) {
            return false;
        }
    
        $this->updateWalletBalanceUser($senderID, -$amount);
    
        $this->updateWalletBalanceReceiver($recipientID, $amount);
    
        return true;
    }

    private function getUserBalance($userID) {
        $this->db->query("SELECT Quantité FROM wallet WHERE User_ID = :userID");
        $this->db->bind(":userID", $userID);
        $statement = $this->db->single();
    
        return $statement->Quantité ?? 0;
    }

    
    private function updateWalletBalanceUser($userID, $amount) {
        $query = "UPDATE wallet SET Quantité = Quantité :amount WHERE User_ID = :userID";
        $this->db->query($query);
        $this->db->bind(":amount", $amount); 
        $this->db->bind(":userID", $userID);
        $this->db->execute();
    }
    
    private function updateWalletBalanceReceiver($userID, $amount) {
        $query = "UPDATE wallet SET Quantité = Quantité + :amount WHERE User_ID = :userID";
        $this->db->query($query);
        $this->db->bind(":amount", $amount);
        $this->db->bind(":userID", $userID);
        $this->db->execute();
    }



    
}

