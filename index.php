<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <?php
        //$vetor = array("IFSC","UFSC","FURB","IFC");
        //for($i = 0; $i < sizeof($vetor); $i++) {
        //    echo "<h2>Valor do vetor no índice " . ($i+1) . ": '$vetor[$i]' </h2>\n";
        //};

        //$matriz = [
        //    ["Joao", 40],
        //    ["Maria", 30]
        //];
//
        //echo $matriz[0][0] . "";
        //echo $matriz[0][1] . "<br>";
        //echo $matriz[1][0] . "";
        //echo $matriz[1][1] . "<br>";
    
        $matriz = [
            "cadastro1" => ["Nome" => "Joao", "Idade" => 40],
            "cadastro2" => ["Nome" => "Maria", "Idade" => 30],
        ];

        //echo $matriz[0]["nome"] . " ";
        //echo $matriz[0]["idade"] . "<br>";
        //echo $matriz[1]["nome"] . " ";
        //echo $matriz[1]["idade"] . "<br>";
        var_dump($_SERVER)
        //echo "<pre>";
        //foreach($matriz as $linha){
        //    echo "<br>";
        //    foreach($linha as $chave => $valor){
        //        echo "$chave:" . "\t" .  "$valor" . "\t";
        //    }
        //}
        //echo "</pre>";


    ?>
</body>
</html>