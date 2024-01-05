<?php

class Wallet extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Wallets');

    }


    public function index()
    {
        $data = $this->model->getWallet();

        $this->view('pages/wallet', $data);
    }

    public function wallet()
    {
        $userId = 99999;
        $data = $this->model->getWallet($userId);

        $this->view('pages/wallet', $data);
    }
}
