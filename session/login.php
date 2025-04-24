<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST["Usuario"], $_POST['senha'])){
            if($_POST['Usuario']=='maria' && $_POST['senha']=='123'){
                $_SESSION['Usuario'] = $_POST['Usuario'];
                header('Location: clientes.php');
            }
        }

        if(isset($_GET['erro'])){
            $erro= "É necessário logar para acessar o sistema!";
        }
    ?>
    <div style="backgoutnd-color: coral; margin:10px">
        <?php echo $erro ?? ''?>
    </div>
    
    
    <form action="" method="post">
        <input type="text" name="Usuario" placeholder="Usuario">
        <input type="text" name="senha" placeholder="Senha">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>