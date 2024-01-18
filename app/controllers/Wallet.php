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
        $userId = 100002;
        
        // Get the user's wallet data
        $walletData = $this->model->getWalletForUser($userId);
    
        // Fetch data for cryptocurrencies in the user's wallet
        $cryptoData = $this->model->fetchCryptoData($walletData);
    
        $data = [
            'wallet' => $walletData,
            'User_ID' => $userId,
            'coin' => $cryptoData // Rename 'coin' to 'cryptoData' for consistency
        ];
    
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


    public function getAll()
    {
        $walletid = 0;
        if (isset($_POST['User_ID'])) {
            $walletid = $_POST['User_ID'];
        }
        $data = $this->model->getall($walletid);
        if ($data) {
            echo json_encode($data);
        }
    }
}


