<?php

class Wallet extends Controller
{
    private $walletModel;
    private $model;

    public function __construct()
    {
        $this->model = $this->model('walletModel');
    }

    public function wallet()
    {

        $this->view('pages/wallet');
    }


    
    public function buy()
    {
        $Crypto_id = 3;
        $userid = $_SESSION['user_id'];
        $coin = $this->model->checkCoin($Crypto_id, $userid);
        if (count($coin) > 0) {

            if (isset($_POST["submit_buy"])) {

                $newQuantite = $_POST['Quant'];
                $this->model->updateWallet($Crypto_id, $newQuantite);
            }
        } else {

            if (isset($_POST["submit_buy"])) {
                $data = [
                    'Quantite' => trim($_POST['Quant']),
                    'User_ID' => $_SESSION['user_id'],
                    'Crypto_id' => 3,

                ];
                $this->model->insertWallet($userid, $data);
                redirect('s/validation');
            }
        }
    }
}
