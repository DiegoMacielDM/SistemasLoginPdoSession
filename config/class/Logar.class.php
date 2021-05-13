<?php

    class Logar{


        public function login($email, $password){
            global $conexao;

            $sql = "SELECT * FROM login2 Where email = :email AND password = :password";
            $sql = $conexao->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("password", md5($password));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

               $_SESSION['id'] = $dado['id'];
               return true;
            }else{
                return false;
            }


    }
}

?>