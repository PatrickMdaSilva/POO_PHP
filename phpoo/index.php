<?php

require ("vendor/autoload.php");


Use app\classes\UploadFoto;

$upload = new UploadFoto("arquivo.png");


//echo $upload->teste();
//$upload->extension();
//$upload->rename();
$upload->validation();
echo $upload->upload();
echo "<br>";





