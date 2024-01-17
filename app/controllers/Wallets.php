<?php

class Wallets extends Controller
{

    private $Wallet;

    public function __construct()
    {
        $this->Wallet = $this->model('wallet');
    }


    public function send()
    {

        $senderID = $_SESSION['user_id'];
        $recipientID = $_POST['user'];
        $amount = $_POST["amount"];

        $transactionResult = $this->Wallet->sendCoins($senderID, $recipientID, $amount);

        if ($transactionResult) {
            echo "<p>Transaction successful! Cryptocurrency sent.</p>";
        } else {
            echo "<p>Error: Insufficient balance or other issues.</p>";
        }

        $this->view('pages/wallet');
    }
}
