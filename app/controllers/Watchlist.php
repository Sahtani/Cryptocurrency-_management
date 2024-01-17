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

    public function index()
    {

        $this->view('pages/watchlist');
    }

    public function addfavorite($coinId, $userId)
    {
        $this->Watchlist->addFavorite($coinId, $userId);
        $cryptoData = $this->coins->fetchCryptoData();
        $data = [
            'cryptoData' => $cryptoData,

        ];
        foreach ($cryptoData as $crypto) {
            $existingCoin = $this->coins->getCoinById($crypto['id']);

            if (!$existingCoin) {
                $this->coins->insertCoin($crypto['id'], $crypto['name'], $crypto['symbol'], $crypto['slug'], $crypto['max_supply']);
            }
        }
        $this->view('pages/dashboard', $data);
    }

    public function displayCrypto()
    {
        $userId = 99999;
        $cryptoData = $this->coins->fetchCryptoData();
        $data = $this->Watchlist->getUserWatchlist($userId, $cryptoData);
        $this->view('pages/watchlist', $data);
    }
}
