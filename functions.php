<?php
function randomPassword($length){
    $maxCrt = 2;
  
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";
  
    $lowerCase = str_shuffle($lowerCase);
    $upperCase = str_shuffle($upperCase);
    $numbers = str_shuffle($numbers);
    $symbols = str_shuffle($symbols);
  
    $randomPassword = substr($lowerCase, 0, $maxCrt);
    $randomPassword .= substr($upperCase, 0, $maxCrt);
    $randomPassword .= substr($numbers, 0, $maxCrt);
    $randomPassword .= substr($symbols, 0, $maxCrt);
  
    // return  str_shuffle($randomPassword);
    $characters = $lowerCase . $upperCase . $numbers . $symbols;
  
    return substr(str_shuffle($characters), 0, $length);
}