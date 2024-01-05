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


  public function dashboard()
  {
    $data = $this->model('User');
<<<<<<< HEAD

=======
>>>>>>> d130830c1c0699ae2931db0e71b203efbd3eaf1f
    $row = $data->displayCoin();
    // $coins = $data->displaywatchlist();
    $data = array(
      'row' => $row,
<<<<<<< HEAD
      'coins' => $coins,
    );
    $this->view('pages/dashboard', $data);
  }


  public function Watchlist()
  {
    $this->view('pages/watchlist');
  }
=======
      // 'coins'=> $coins,
    );
    $this->view('pages/dashboard', $data);
  }
>>>>>>> d130830c1c0699ae2931db0e71b203efbd3eaf1f
}
