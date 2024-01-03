<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
      
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    publiC function dashboard(){
      $this->view('pages/dashboard');
    }

    public function Watchlist(){
      $this->view('pages/watchlist');
    }
  }