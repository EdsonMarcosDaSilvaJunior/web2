<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "aluno";

        $conn = new mysqli($servername, $username, $password);

        if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
        }
        echo "Connected successfully";

        //Cria Banco de Dados
        //$sql = "CREATE DATABASE myDB";
        //if ($conn->query($sql) === TRUE) {
        //  echo "Database created successfully" . "<br>";
        //} else {
        //  echo "Error creating database: " . $conn->error . "<br>";
        //}
    ?>
</body>
</html>