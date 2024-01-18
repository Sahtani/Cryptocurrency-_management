<?php

class Wallets extends Controller
{

    private $Wallet;

    public function __construct()
    {
        $this->Wallet = $this->model('wallet');
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

            // $data["message"]="Transaction successful! Cryptocurrency sent.";
            $this->view('pages/wallet');
        } else {
            // $data["message"]="Error: Insufficient balance or other issues";
            $this->view('pages/wallet');
        }

        $this->view('pages/wallet');
    }
}
