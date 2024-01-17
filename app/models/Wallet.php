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
        $this->db->query("SELECT * FROM wallet where  User_ID = $userid and Crypto_ID=$Crypto_id");
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
    public function updateWallet($Crypto_id, $newQuantite)
    {

        $this->db->query("UPDATE  wallet  set Quantite=Quantite+$newQuantite where Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
    }

    public function getCryptocurrencies($userID)
    {
        $this->db->query("SELECT c.* FROM cryptomonnaies c
                    JOIN wallet w ON c.CryptomonnaieID = w.crypto_id
                    WHERE w.User_ID = :userID");
        $this->db->bind(":userID", $userID);
        return $this->db->resultSet();
    }


    public function sendCoins($senderID, $recipientID, $amount, $cryptoID)
    {
        $senderBalance = $this->getUserBalance($senderID);

        if ($senderBalance < $amount) {
            return false;
        }

        $this->updateWalletBalanceUser($senderID, $amount, $cryptoID);

        $this->updateWalletBalanceReceiver($recipientID, $amount, $cryptoID);

        return true;
    }

    private function getUserBalance($userID)
    {
        $this->db->query("SELECT Quantite FROM wallet WHERE User_ID = :userID");
        $this->db->bind(":userID", $userID);
        $statement = $this->db->single();

        return $statement->Quantite ?? 0;
    }


    private function updateWalletBalanceUser($userID, $amount, $cryptoID)
    {
        $query = "UPDATE wallet SET Quantite = Quantite - :amount WHERE User_ID = :userID AND crypto_id = :cryptoID";
        $this->db->query($query);
        $this->db->bind(":amount", $amount);
        $this->db->bind(":userID", $userID);
        $this->db->bind(":cryptoID", $cryptoID);
        $this->db->execute();
    }
    private function updateWalletBalanceReceiver($userID, $amount, $cryptoID)
    {
        $query = "UPDATE wallet SET Quantite = Quantite + :amount WHERE User_ID = :userID AND crypto_id = :cryptoID";
        $this->db->query($query);
        $this->db->bind(":amount", $amount);
        $this->db->bind(":userID", $userID);
        $this->db->bind(":cryptoID", $cryptoID);
        $this->db->execute();
    }
}
