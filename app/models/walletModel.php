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
    public function insertWallet($user_id)

    {   

        $this->db->query("INSERT into wallet (User_ID,Quantité,Crypto_id,name_crypto) values(:User_ID,:Quantité,:Crypto_id:name_crypto)");
        $this->db->bind($this->user_id, $this->Quantité, $this->Crypto_id,$this->name_crypto);
        $row = $this->db->resultSet();
        return $row;
    }
    public function updateWallet($Crypto_id,$newQuantite)
    {

        $this->db->query("UPDATE  wallet  set Quantité=Quantité+$newQuantite where Crypto_id=$Crypto_id");
        $row = $this->db->resultSet();
       
    }


}
