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
        $totalQuantite = 0;
        foreach ($data as $entry) {
            $totalQuantite += floatval($entry['Quantité']);
        }

        // Add the totalQuantite to the data array
        $data['totalQuantite'] = $totalQuantite;
        $data['User_ID'] = $userId;



        $this->view('pages/wallet', $data);
    }

    public function send()
    {

        $data = [
            'Id' => $_POST["User_id"],
            'amount' => $_POST["amount"],
        ];

        $this->view('pages/send', $data);
    }
}
