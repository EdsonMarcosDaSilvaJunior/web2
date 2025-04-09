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
        class Pessoa {
            private $nome;
            private $idade;

            function __construct($nome="", $idade=0){
                $this->nome = $nome;
                $this->idade = $idade;
            }

            function envelhecer($anos){
                if($anos > 0) {
                    $this->idade += $anos;
                }
            }

            function getNome(){
                return $this->nome;
            }
            function getIdade(){
                return $this->idade;
            }
        }
        $pessoa1 = new Pessoa("Edson",25);

        $pessoa2 = new Pessoa("Pessoa-pássaro",56);
        $pessoas = [$pessoa1, $pessoa2];

        foreach ($pessoas as $elemento) {
            echo "A Idade de " . $elemento->getNome() . " é " . $elemento->getIdade() . "<br>";
        }

        $pessoa1->envelhecer(1);

        echo "A Idade de " . $pessoa1->getNome() . " é " . $pessoa1->getIdade() . "<br>";
    

        $pessoa3 = new Pessoa("Guilherme", 15);
        $pessoa4 = new Pessoa("Hudson", 22);

        $pessoas2 = [$pessoa1, $pessoa2,$pessoa3,$pessoa4];
        
        foreach ($pessoas2 as $elemento) {
            echo "A Idade de " . $elemento->getNome() . " é " . $elemento->getIdade() . "<br>";
        }

    ?>
</body>
</html>