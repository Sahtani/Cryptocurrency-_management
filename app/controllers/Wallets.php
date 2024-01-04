<?php

class Wallets extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = $this->model('Wallet');
    }



    public function index()
    {
        $this->view('pages/wolet.php');
    }

    public function withdraw()
    {
    }
}
