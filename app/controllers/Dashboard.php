<?php
class Dashboard extends Controller
{

  private $Watchlist;


  public function __construct()
  {
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


    $this->view('pages/watchlist');
  }

  public function wallet()
  {

    $this->view('pages/wallet');
  }


  public function dashboard()
  {
    $data = $this->model('dashboardModel');
    $row = $data->displayCoin();
    // $coins = $data->displaywatchlist();
    $data = array(
      'row' => $row,
      // 'coins'=> $coins,
    );
    $this->view('pages/dashboard', $data);
  }
}
