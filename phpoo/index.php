<?php

require ("vendor/autoload.php");

Use app\classes\UploadFoto;

$upload = new UploadFoto("foto.png");

echo $upload->teste();
//$upload->extension();
//$upload->rename();
//echo $upload->upload();
//echo "<br>";





