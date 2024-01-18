<?php
class wallet
{
    public $User_ID;
    public $Quantité;
    public $Crypto_id;
    public $user_id;
    public $name_crypto;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function displayWallet($userid)
    {
        $this->db->query("SELECT Quantite FROM wallet WHERE User_ID = :User_ID");
        $this->db->bind(':User_ID', $userid);
        return $wallet = $this->db->single();
    }

    public function checkCoin($Crypto_id, $userid)
    {
        $this->db->query("SELECT * FROM wallet where  user_id = $userid and crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
            return $row;    
    }
    public function Wallet($userid)
    {
        $this->db->query("SELECT * FROM wallet where  user_id = $userid");
        $row = $this->db->resultSet();
            return $row;    
    }
    public function insertWallet($user_id, $data)
    {
        $this->db->query("INSERT INTO wallet (User_ID, Quantite, crypto_id) VALUES (:User_ID, :Quantite, :Crypto_id)");
        $this->db->bind(':User_ID', $data['User_ID']);
        $this->db->bind(':Quantite', $data['Quantite']);
        $this->db->bind(':Crypto_id', $data['crypto_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateWallet($Crypto_id,$newQuantite)
    {
        $this->db->query("UPDATE  wallet  set Quantite=Quantite+$newQuantite where crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
       
    }
    public function updateWallet_sell($Crypto_id, $newQuantite)
    {
        $this->db->query("UPDATE  wallet  set Quantite=Quantite-$newQuantite where crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
    }
    public function deleteWallet($user_id,$Crypto_id)
    {
        $this->db->query("DELETE * FROM  wallet  where crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
    }
    public function getCryptocurrencies($userID)
    {
        $this->db->query("SELECT * FROM cryptomonnaies c
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

    public function getUserBalance($userID)
    {
        $this->db->query("SELECT Quantite FROM wallet WHERE User_ID = :userID");
        $this->db->bind(":userID", $userID);
        $statement = $this->db->single();

        return $statement->Quantite ?? 0;
    }
    // public function getuserQunatite($userID,$cryptoID)
    // {
    //     $this->db->query("SELECT Quantite FROM wallet WHERE User_ID = :userID and crypto_id=:Crypto_id ");
    //     $this->db->bind(":userID", $userID);
    //     $this->db->bind(":Crypto_id", $Crypto_id);
    //     $statement = $this->db->single();
        

    //     return $statement->Quantite ?? 0;
    // }


    public function updateWalletBalanceUser($userID, $amount, $cryptoID)
    {
        $query = "UPDATE wallet SET Quantite = Quantite - :amount WHERE User_ID = :userID AND crypto_id = :cryptoID";
        $this->db->query($query);
        $this->db->bind(":amount", $amount);
        $this->db->bind(":userID", $userID);
        $this->db->bind(":cryptoID", $cryptoID);
        $this->db->execute();
    }
    public function updateWalletBalanceReceiver($userID, $amount, $cryptoID)
    {
        $query = "UPDATE wallet SET Quantite = Quantite + :amount WHERE User_ID = :userID AND crypto_id = :cryptoID";
        $this->db->query($query);
        $this->db->bind(":amount", $amount);
        $this->db->bind(":userID", $userID);
        $this->db->bind(":cryptoID", $cryptoID);
        $this->db->execute();
    }
}


