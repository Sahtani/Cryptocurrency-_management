<?php
class Coins extends Controller
{
    private $cryptoModel;
    public $cryptoData;

    public function __construct() {
        $this->cryptoModel = $this->model('Coin');
    }

    public function index()
    {
        $cryptoData = $this->cryptoModel->fetchCryptoData();
        $data =[
            'cryptoData'=> $cryptoData,

        ];
        foreach ($cryptoData as $crypto) {
            $existingCoin = $this->cryptoModel->getCoinById($crypto['id']);

            if (!$existingCoin) {
                $this->cryptoModel->insertCoin($crypto['id'], $crypto['name'], $crypto['symbol'], $crypto['slug'], $crypto['max_supply']);
            }
        }
         $this->view('pages/dashboard', $data);
    
    }

}
