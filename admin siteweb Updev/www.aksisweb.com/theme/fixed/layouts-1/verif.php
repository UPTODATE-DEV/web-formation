<?php
include 'config/connect.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);

    $req=$db ->prepare('SELECT * FROM admin WHERE username=:username AND password=:password');
    $req->execute(array(
        'username' =>$username,
        "password" =>$password
    ));
    $res=$req -> fetchAll(PDO::FETCH_OBJ);
    if($res){
        $user->con($res[0]->ID_ADMIN);
        header('location:Ajout-user.php');
    }else{
        header('location:login.php');
    }
}
?>