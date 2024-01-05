<?php

class Wallet extends Controller
{
    private $walletModel;
    private $model;

    public function __construct()
    {
        $this->model = $this->model('walletModel');
    }

    public function wallet()
    {

        $this->view('pages/wallet');
    }
    public function buy()
    {
        $Crypto_id=3;
        $userid=99999;
       $coin= $this->model->checkCoin($Crypto_id, $userid);
    //    var_dump($coin);
    //    die();
       if(count($coin)>0){
       
        if(isset($_POST["submit_buy"])){
           
            $newQuantite=$_POST['Quant'];
        $this->model->updateWallet($Crypto_id, $newQuantite);
        }
            
       }else{
       if($_POST["submit_buy"]){

         $this->model->insertWallet($userid);
       }
        
       }
    }

}
