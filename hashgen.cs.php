<?php
class HashGenerator{

  public static function getmd5() {
      $timenow  = time();
      $bytes = random_bytes(50);
      $hexbytes = bin2hex($bytes);
      $secret = $timenow + $hexbytes;
      $hashvalue = hash('md5', $secret );
      print_r(trim($hashvalue));
  }

    public static function getsha1() {
        $timenow  = time();
        $bytes = random_bytes(70);
        $hexbytes = bin2hex($bytes);
        $secret = $timenow + $hexbytes;
        $hashvalue = hash('sha1', $secret );
        print_r(trim($hashvalue));
    }

    public static function getsha256() {
        $timenow  = time();
        $bytes = random_bytes(90);
        $hexbytes = bin2hex($bytes);
        $secret = $timenow + $hexbytes;
        $hashvalue = hash('sha256', $secret );
        print_r(trim($hashvalue));
    }

    public static function getsha384() {
        $timenow  = time();
        $bytes = random_bytes(90);
        $hexbytes = bin2hex($bytes);
        $secret = $timenow + $hexbytes;
        $hashvalue = hash('sha384', $secret );
        print_r(trim($hashvalue));
    }
    public static function getsha512() {
        $timenow  = time();
        $bytes = random_bytes(90);
        $hexbytes = bin2hex($bytes);
        $secret = $timenow + $hexbytes;
        $hashvalue = hash('sha512', $secret );
        print_r(trim($hashvalue));
    }
}
?>
