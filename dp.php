<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=duanmau2023;charset=utf8","root","");

   
}catch(\throwable $th){
    echo 'loi ket noi';
}
?>
