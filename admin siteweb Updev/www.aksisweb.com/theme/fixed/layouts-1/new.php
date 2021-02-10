<?php 
  include 'config/connect.php';

  if (isset($_POST['firstname']) && ! empty ($_POST['firstname'])){
    if(isset($_POST['username']) && ! empty($_POST['username'])){
      if(isset($_POST['password']) && ! empty($_POST['password'])){
        if(isset($_POST['mail']) && ! empty($_POST['mail'])){
          $firstname=htmlspecialchars($_POST['firstname']);
          $username=htmlspecialchars($_POST(['username']));
          $password=htmlspecialchars($_POST['password']);
          $email=htmlspecialchars($_POST['mail']);

          $req=$db -> prepare('INSERT INTO admin (PASSWORD,USERNAME,name,email) VALUES (:password,:username,:name,:email)');
          $res=$req ->execute(array(
            ':password' =>$password,
            ':username' =>$username,
            ':name' =>$firstname,
            ':email' =>$email
          ));
            if($res){
              echo "valider";
            }else{
              echo "erreur";
            }
        }
      }
    }

  }
  ?>