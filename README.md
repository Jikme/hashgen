# hashgen
PHP Hash Generator
Quick and easy hash generator provides md5, sha1, or sha256..
The class is static which makes it accessible without needing an instantiation of the class.

hash generation based on: 

      $timenow  = time();
      $bytes = random_bytes(50);
      $hexbytes = bin2hex($bytes);
      $secret = $timenow + $hexbytes;
      $hashvalue = hash('sha256', $secret );

Example usage:

 <input type="hidden" name="hash" id="hash" value="<?php HashGenerator::getmd5();?>">
 
 <input type="hidden" name="hash" id="hash" value="<?php HashGenerator::getsha1();?>">
  
 <input type="hidden" name="hash" id="hash" value="<?php HashGenerator::getsha256();?>">
