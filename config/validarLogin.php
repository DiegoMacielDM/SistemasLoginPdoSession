<?php

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

        require "conexao.php";
        require "class/Logar.class.php";

        $u = new Logar();

        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        if($u->login($email, $password) == true){
            if(isset($_SESSION['id'])){
                header("Location: ../views/dashboard.php");
            }else{
                header("Location: ../login.php");
            }
        }else{
            header("Location: ../login.php");
        }




    }else{
        header("Location: ../login.php");

    }


?>