<?php
class walletModel
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
        $this->db->query("SELECT Quantité FROM wallet WHERE User_ID = :User_ID");
        $this->db->bind(':User_ID', $userid);
        return $wallet = $this->db->single();
    }
    public function checkCoin($Crypto_id, $userid)
    {
        $this->db->query("SELECT * FROM wallet where  user_id = $userid and Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
            return $row;    
    }
    public function insertWallet($user_id, $data)
    {
        $this->db->query("INSERT INTO wallet (User_ID, Quantite, Crypto_id) VALUES (:User_ID, :Quantite, :Crypto_id)");
        $this->db->bind(':User_ID', $data['User_ID']);
        $this->db->bind(':Quantite', $data['Quantite']);
        $this->db->bind(':Crypto_id', $data['Crypto_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateWallet($Crypto_id,$newQuantite)
    {
        $this->db->query("UPDATE  wallet  set Quantite=Quantite+$newQuantite where Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
       
    }
<<<<<<< HEAD
    public function updateWallet_sell($Crypto_id, $newQuantite)
    {
        $this->db->query("UPDATE  wallet  set Quantite=Quantite-$newQuantite where Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
    }
    public function deleteWallet($user_id,$Crypto_id)
    {
        $this->db->query("DELETE * FROM  wallet  where Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
    }

=======
>>>>>>> 659e9ba46788e273e1bb1f8c9d7678ab50f2e067
}
