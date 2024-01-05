<?php
class Pages extends Controller
{

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
    $data = array('row' => $row);
    $this->view('pages/dashboard', $data);
  }

  public function Watchlist()
  {
    $this->view('pages/watchlist');
  }

  public function index()
  {
    $this->view('pages/wallet');
  }
}
