<?php

class Watchlist extends Controller
{
    private $Watchlist;
    private $coins;
    public function __construct()
    {
    $this->Watchlist = $this->model('Watchlists');
    $this->coins = $this->model('Coin');
    
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
