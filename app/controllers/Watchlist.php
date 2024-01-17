<?php

class Watchlist extends Controller
{
    private $Watchlist;
    private $coins;
    public function __construct()
    {
    $this->Watchlist = $this->model('Watchlists');
<<<<<<< HEAD
    $this->coins = $this->model('dashboardModel');
=======
    $this->coins = $this->model('Coin');
>>>>>>> 659e9ba46788e273e1bb1f8c9d7678ab50f2e067
    
    }

    public function index() {

        $this->view('pages/watchlist');
    }

    public function addfavorite($coinId)
    {

        $userId = 99999;
        $this->Watchlist->addFavorite($userId, $coinId);
        $data = $this->coins->displayCoin();
        $data = array(
            'row' => $data,
        );
        $this->view('pages/dashboard',$data);

        
    }

    public function displayCrypto(){
        $userId = 99999;
        $cryptoData = $this->coins->fetchCryptoData();
        $data = $this->Watchlist->getUserWatchlist($userId, $cryptoData);
       
        $this->view('pages/watchlist',$data);
    }


}
