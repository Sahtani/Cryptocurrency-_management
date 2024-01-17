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
    { $userid= $_SESSION['user_id'];
        if(isset($_POST['submit_buy'])){
            $Crypto_id=$_POST["id_crypto"];    
       $coin= $this->model->checkCoin($Crypto_id, $userid);
       if(count($coin)>0){ 
       
            $newQuantite=$_POST['Quant'];
        $this->model->updateWallet($Crypto_id, $newQuantite);
        redirect('coins');
      
       }else{
         $data = [
                    'Quantite' => trim($_POST['Quant']),
                    'User_ID' =>$_SESSION['user_id'] ,
                    'Crypto_id'=>$_POST["id_crypto"],
                   
                ];
         $this->model->insertWallet($userid,$data);
                redirect('coins');

       }
        
       }
    }
}