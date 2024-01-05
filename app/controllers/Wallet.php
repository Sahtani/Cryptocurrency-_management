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
        $Crypto_id= $_POST['id_crypto'];
        $userid= $_SESSION['user_id'];
       $coin= $this->model->checkCoin($Crypto_id, $userid);
       if(count($coin)>0){
       
        if(isset($_POST["submit_buy"])){
           
            $newQuantite=$_POST['Quant'];
        $this->model->updateWallet($Crypto_id, $newQuantite);
                redirect('pages/dashboard');
        }
            
       }else{
       
       if(isset($_POST["submit_buy"])){ 
                $data = [
                    'Quantite' => trim($_POST['Quant']),
                    'User_ID' =>$_SESSION['user_id'] ,
                    'Crypto_id'=> trim($_POST['id_crypto']),
                   
                ];
         $this->model->insertWallet($userid,$data);
                redirect('pages/dashboard');

       }
        
       }
    }

}
