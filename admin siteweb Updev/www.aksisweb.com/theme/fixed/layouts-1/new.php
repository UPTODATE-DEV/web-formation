<?php 
include 'config/connect.php';
if(isset($_POST['name']) && !empty($_POST['name'])){
    if(isset($_POST['username']) && ! empty($_POST['username'])){
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            if (isset($_POST['mail']) && !empty($_POST['mail'])) {
               $name=htmlspecialchars($_POST['name']);
               $username=htmlspecialchars($_POST['username']);
               $password=htmlspecialchars($_POST['password']);
               $email=htmlspecialchars($_POST['mail']);

               $req=$db->prepare('INSERT INTO admin(PASSWORD,USERNAME,name,email) VALUES
               (:password,:username,:name,:email)');

               $res=$req->execute(array(
                   ':password'=>$password,
                   ':username'=>$username,
                   ':name'=>$name,
                   ':email'=>$email
               ));
               if ($res) {
                  echo "valide";
               }else{
                echo "err";
               }
            }
        }
    }
}
?>