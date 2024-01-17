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
<<<<<<< HEAD
        $Crypto_id= $_POST['id_crypto'];
=======
        $Crypto_id=3;
>>>>>>> 659e9ba46788e273e1bb1f8c9d7678ab50f2e067
        $userid= $_SESSION['user_id'];
       $coin= $this->model->checkCoin($Crypto_id, $userid);
       if(count($coin)>0){
       
        if(isset($_POST["submit_buy"])){
           
            $newQuantite=$_POST['Quant'];
        $this->model->updateWallet($Crypto_id, $newQuantite);
<<<<<<< HEAD
                redirect('pages/dashboard');
=======
>>>>>>> 659e9ba46788e273e1bb1f8c9d7678ab50f2e067
        }
            
       }else{
       
       if(isset($_POST["submit_buy"])){ 
                $data = [
                    'Quantite' => trim($_POST['Quant']),
                    'User_ID' =>$_SESSION['user_id'] ,
<<<<<<< HEAD
                    'Crypto_id'=> trim($_POST['id_crypto']),
                   
                ];
         $this->model->insertWallet($userid,$data);
                redirect('pages/dashboard');
=======
                    'Crypto_id'=>3,
                   
                ];
         $this->model->insertWallet($userid,$data);
                redirect('s/validation');
>>>>>>> 659e9ba46788e273e1bb1f8c9d7678ab50f2e067

       }
        
       }
    }

}
