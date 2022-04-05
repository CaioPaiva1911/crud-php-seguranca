<?php
    class Cliente{

        public function buscarCliente($nome){
            global $pdo;
            // $consulta = "SELECT * FROM tbl_clientes WHERE nome LIKE '%$nome%' ";
            // $executar = mysqli_query($conn, $consulta);
            $sql = "SELECT * FROM tbl_clientes WHERE nome LIKE :nome";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", "%".$nome."%");
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetchAll();
                
            } else{
                return null;
            }
        }
    }

?>