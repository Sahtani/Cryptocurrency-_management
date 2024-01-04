<?php
class Dashboard extends Controller
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

  public function watchlist() {
    

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
