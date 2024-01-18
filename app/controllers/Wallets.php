<?php

class Wallets extends Controller
{
    private $Wallet;

    public function __construct()
    {
        $this->Wallet = $this->model('wallet');
    }

    public function wallet()
    {

        $this->view('pages/wallet');
    }
    public function buy()
    { $userid= $_SESSION['user_id'];
        if(isset($_POST['submit_buy'])){
            $Crypto_id=$_POST["id_crypto"];    
       $coin= $this->Wallet->checkCoin($Crypto_id, $userid);
       if(count($coin)>0){ 
       
            $newQuantite=$_POST['Quant'];
            $this->Wallet->updateWallet($Crypto_id, $newQuantite);
        redirect('coins');
      
       }else{
         $data = [
                    'Quantite' => trim($_POST['Quant']),
                    'User_ID' =>$_SESSION['user_id'] ,
                    'Crypto_id'=>$_POST["id_crypto"],
                   
                ];
                $this->Wallet->insertWallet($userid,$data);
                redirect('coins');

       }
        
       }
    }
    public function displayCoins()
    {
        $userID =  $_SESSION['user_id'];
        $cryptocurrencies = $this->Wallet->getCryptocurrencies($userID);
        $data = [
            'coins' => $cryptocurrencies
        ];

        $this->view('pages/wallet', $data);
    }

    public function send()
    {
        $senderID = $_SESSION['user_id'];
        $recipientID = $_POST['user'];
        $amount = $_POST["amount"];
        $cryptoID = $_POST["crypto"];

        $transactionResult = $this->Wallet->sendCoins($senderID, $recipientID, $amount, $cryptoID);

        if ($transactionResult) {
            echo "<p>Transaction successful! Cryptocurrency sent.</p>";
        } else {
            echo "<p>Error: Insufficient balance or other issues.</p>";
        }

        $this->view('pages/wallet');
    }
    public function sell(){
        
        if(isset($_POST['sell'])){
            $userID = $_SESSION['user_id'];
            $qt = $_POST["Quant"];
            $cryptoID = $_POST["crypto"];
            $cryptocurrencies = $this->Wallet->getCryptocurrencies($userID);
            foreach ($cryptocurrencies as $crypto) {
                if ($crypto->Quantite >= $qt) {
                    $this->Wallet->updateWalletBalanceUser($userID, $qt, $cryptoID);
                    redirect("pages/wallet");
                } else {
                    $data = ["message" => "Insufficient balance"];
                    
                }
            }
          
            

            }
        }
    }



