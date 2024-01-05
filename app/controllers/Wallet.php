<?php

class Wallet extends Controller
{
    private $model;



    public function __construct()
    {
        $this->model = $this->model('Wallet');

    }


    public function displayCrypto()
    {
        $userId = 99999;
        $data = $this->model->displayWallet($userId);

        $this->view('pages/wallet', $data);
    }


}
