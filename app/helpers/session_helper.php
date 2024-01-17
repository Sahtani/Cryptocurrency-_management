<?php
  session_start();

  function isLoggedIn(){
    if(isset($_SESSION['conn'])){
      return true;
    } else {
      return false;
    }
  }
