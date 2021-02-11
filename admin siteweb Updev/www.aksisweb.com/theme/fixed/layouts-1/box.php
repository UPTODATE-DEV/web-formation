<?php 
 include 'config/connect.php';

    if (isset($_POST['name']) && ! empty($_POST['name'])) {
        if (isset($_POST['title']) && ! empty($_POST['title'])) {
            if (isset($_POST['description']) && ! empty($_POST['description'])) {
               $name=htmlspecialchars($_POST['name']);
               $tilte=htmlspecialchars($_POST['title']);
               $descriptiom=htmlspecialchars($_POST['description']);

               $req=$db->prepare('');
            }
        }
    }
?>