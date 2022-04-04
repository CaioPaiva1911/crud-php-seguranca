<?php
    include_once 'conexao.php';

    $cod = $_GET["id"];
    $table = $_GET["tabela"];

    if($table == '1'){

        $excluir = "DELETE FROM tbl_usuarios WHERE id = '$cod' ";
    } else if($table == '2'){
        $excluir = "DELETE FROM tbl_clientes WHERE id = '$cod' ";      
    } else{
        $excluir = "DELETE FROM tbl_produtos WHERE codprod = '$cod' ";
    }

    $executar = mysqli_query($conn, $excluir);

        
        
        if($executar){
            if($table == '1'){
                echo "<script>
                    alert('Excluído com sucesso!!!'); 
                    window.location.href = '../php/menuadm.php'
                </script>';";
            }else if($table == '2'){
                echo "<script>
                    alert('Excluído com sucesso!!!'); 
                    window.location.href = '../php/menuuser.php'
                </script>';";
            }else{
                echo "<script>
                    alert('Excluído com sucesso!!!'); 
                    window.location.href = '../php/menuprod.php'
                </script>';";
            }
        }else{
            if($table == '1'){
                echo "<script>
                    alert(' [ERRO] Dado não excluído!!!'); 
                    window.location.href = '../php/menuadm.php'
                </script>';";
            }else if($table == '2'){
                echo "<script>
                alert(' [ERRO] Dado não excluído!!!'); 
                window.location.href = '../php/menuuser.php'
                </script>';";
            }else{
                echo "<script>
                alert(' [ERRO] Dado não excluído!!!'); 
                window.location.href = '../php/menuprod.php'
                </script>';";
            }
        }
?>