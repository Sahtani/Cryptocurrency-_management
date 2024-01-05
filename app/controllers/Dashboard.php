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

  public function wallet(){

    $this->view('pages/wallet');
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
<<<<<<< HEAD:app/controllers/Dashboard.php
=======

  
  public function Watchlist()
  {
    $this->view('pages/watchlist');
  }
  
>>>>>>> fb68f6b3398bd7b71351e8e5f6dd9129fc958c02:app/controllers/Pages.php
}
