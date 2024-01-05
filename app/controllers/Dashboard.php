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

  public function wallet(){

    $this->view('pages/wallet');
  }
  public function register(){
    $this->view('pages/register');
  }
  public function login(){
    $this->view('pages/login');
  }
  public function statistics(){
    $this->view('pages/statistics');
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
  
  public function Watchlist()
  {
    $this->view('pages/watchlist');
  }
  
}
