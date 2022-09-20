<?php

namespace App\Classes;

class HideId{
    public static function hide($value){
      return bin2hex(openssl_encrypt($value, 'aes-256-cbc', 'DUcaU24cUiVH8T0CvK6aM1FcKI1rRgRm', OPENSSL_RAW_DATA, 'AsRAjPewHVCqCS69'));
    }

    public static function reveal($hidden_value){
      if(strlen($hidden_value)%2!=0){
          return null;
      }else{
          return openssl_decrypt(hex2bin($hidden_value), 'aes-256-cbc', 'DUcaU24cUiVH8T0CvK6aM1FcKI1rRgRm', OPENSSL_RAW_DATA, 'AsRAjPewHVCqCS69');
      }
    }
}