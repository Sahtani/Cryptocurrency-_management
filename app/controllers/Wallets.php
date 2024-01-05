<?php

class Wallets extends Controller
{
    private $walletModel;

    public function __construct()
    {
        $this->walletModel = new Wallet();
    }

    public function displayBalance($user_id)
    {
        // Get the balance from the model
        $user_id = 99999;
        $balance = $this->walletModel->getBalance($user_id);

        // Pass the balance to the view (you need to create a view file)
        $this->view('pages/wallet');
    }


}
