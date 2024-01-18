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
    if(isLoggedIn()){
      redirect('pages/dashboard');
  }


    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }


  
  public function Watchlist()
  {
    $this->view('pages/watchlist');
  }
  
}
