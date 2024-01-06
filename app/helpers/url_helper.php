<?php
  // Simple page redirect
  function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
  }

  function generateVerificationCode($length) {
    return rand(pow(10, $length-1), pow(10, $length)-1);
}