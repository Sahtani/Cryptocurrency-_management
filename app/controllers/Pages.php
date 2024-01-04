<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'TraversyMVC',
    ];


    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }

  public function dashboard()
  {
    $this->model('User');
    $data = new User();
    $row = $data->displayCoin();
    $coins = $data->displaywatchlist();
    $data = array(
      'row' => $row,
      'coins'=> $coins,
    );
    $this->view('pages/dashboard', $data);
  }

  
  public function Watchlist()
  {
    $this->view('pages/watchlist');
  }
}
