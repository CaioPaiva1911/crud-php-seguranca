<?php
    class Usuario{

        public function login($login, $senha ){
            global $pdo;

            $sql = "SELECT * FROM tbl_usuarios WHERE usuario = :login AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("login", $login);
            $sql->bindValue("senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                
                $_SESSION["usuario"] = $dado['nomeusuario'];

                return true;
                
            } else{
                return false;
            }
        }

    }

?>