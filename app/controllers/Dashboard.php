<?php
require APPROOT."/models/Wallet.php";
class Dashboard extends Controller
{

  private $Watchlist;
  private $cryptoModel;
  public $cryptoData;

  public function __construct()
  {
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
    $data = [
      'cryptoData' => $cryptoData,

    ];
    foreach ($cryptoData as $crypto) {
      $existingCoin = $this->cryptoModel->getCoinById($crypto['id']);

      if (!$existingCoin) {
        $this->cryptoModel->insertCoin($crypto['id'], $crypto['name'], $crypto['symbol'], $crypto['slug'], $crypto['max_supply']);
      }
    }
    $this->view('pages/watchlist', $data);
  }

  public function wallet()
  {
    
    $userId = $_SESSION['user_id'];
    $message = "Your transaction was successful.";
    $type = "Transaction";
    $wallet = new Wallet();
    $portfolioData = $wallet->getPortfolioValueOverTime($userId);
    // var_dump($_SESSION['user_id']);
    //     die();
    if (!empty($portfolioData) && is_array($portfolioData)) {
        $cryptoNames = array_keys($portfolioData);
        $quantities = array_values($portfolioData);
        
        $data = [
          'cryptoNames' => $cryptoNames,
          'quantities' => $quantities,
        ];
        
        $this->view('pages/wallet', $data);
    }

    // $this->view('pages/wallet');
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
