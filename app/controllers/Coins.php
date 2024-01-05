<?php
class Coins extends Controller
{
    private $cryptoModel;
    public $data;

    public function __construct() {
        $this->cryptoModel = $this->model('Coin');
    }

    public function index()
    {
        $data = $this->cryptoModel->fetchCryptoData();
        foreach ($data as $crypto) {
            $existingCoin = $this->cryptoModel->getCoinByName($crypto['name']);
            var_dump($crypto['name']);
            $max_supply = $crypto['max_supply'] ?? null;
            if (!$existingCoin) {
                $this->cryptoModel->insertCoin($crypto['id'], $crypto['name'], $crypto['symbol'], $crypto['slug'], $max_supply);
            }
        }
        // $this->view('pages/dashboard',$data);
    
    }

    // public function buyCrypto(){
    //     $wallet_id = $_SESSION['wallet_id'];
    //     $crypto_id = $_POST['crypto_id'];
    //     $qte = $_POST['qte'];

    //     $this->cryptoModel->updateWallet($crypto_id, $qte, $wallet_id);

    //     // redirect('Cryptos/index');
    // }
}
