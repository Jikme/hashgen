<?php
require ("./hashgen.cs.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>HashGen</title>
  </head>
  <body>
  <h3>Refresh to generate.</h3>

  <div>
      <pre>RANDOM MD5</pre>
      <pre><?php HashGenerator::getmd5();?></pre>
    </div>
    <div>
    <pre>RANDOM SHA1</pre>
    <pre><?php HashGenerator::getsha1();?></pre>
    </div>
    <div>
      <pre>RANDOM SHA256</pre>
      <pre><?php HashGenerator::getsha256();?></pre>
    </div>
    <div>
      <pre>RANDOM SHA384</pre>
      <pre><?php HashGenerator::getsha384();?></pre>
    </div>
    <div>
      <pre>RANDOM SHA512</pre>
      <pre><?php HashGenerator::getsha512();?></pre>
    </div>
  </body>
</html>
