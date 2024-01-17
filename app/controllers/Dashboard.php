<?php
class Dashboard extends Controller
{

  private $Watchlist;
  private $cryptoModel;
  public $cryptoData;

  public function __construct() {
      $this->cryptoModel = $this->model('Coin');
       $this->Watchlist = $this->model('Watchlists');
  }



  public function index()
  {
    $data = [
      'title' => 'TraversyMVC',
    ];

    $this->view('pages/index', $data);
  }

  public function watchlist()
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
    $this->view('pages/watchlist' , $data);
    
  }

  public function wallet()
  {

    $this->view('pages/wallet');
  }

  public function dashboard()
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
