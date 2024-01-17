<?php
class Dashboard extends Controller
{

  private $cryptoModel;
  private $Watchlist;
  private $model;


  public function __construct()
  {
    $this->Watchlist = $this->model('Watchlists');
    $this->model = $this->model('Wallets');
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


    $this->view('pages/watchlist');
  }



  public function dashboard()
  {
    $cryptoData = $this->cryptoModel->fetchCryptoData();
    $data = [
      'cryptoData' => $cryptoData,

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
