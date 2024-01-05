<?php
class Dashboard extends Controller
{

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
    $data = $this->model('User');
    $row = $data->displayCoin();
    // $coins = $data->displaywatchlist();
    $data = array(
      'row' => $row,
      // 'coins'=> $coins,
    );
    $this->view('pages/dashboard', $data);
  }


}
