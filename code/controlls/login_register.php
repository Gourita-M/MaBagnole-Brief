<?php
    include "../code/models/user.php";

    $users = new User();

//login

    if(isset($_POST['login'])){
        
        $users->setEmail($_POST['email']);
        $users->setPassword($_POST['password']);

        $result = $users->login();

        if($result === true){
            $_SESSION['username'] = $users->getName();
        }
        else{
            echo "<script>alert('Wrong')</script>";
        }
    }

//Register

    if(isset($_POST['register'])){

        $users->setName($_POST['name']);
        $users->setEmail($_POST['email']);
        $users->setPassword($_POST['password']);

        echo $users->getName();

        $result = $users->register();

        if($result === false){
            echo "Email is already in use";
        }
    }

?>