<?php 
  $username='root';
  $password='';

  $db= new PDO('mysql:host=localhost;dbname=sos_mama',$username,$password);
  require 'user.class.php';
  $user=new USER($db);

?>