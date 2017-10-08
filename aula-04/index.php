<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Métodos Getter, Setter e Construtor</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta();
            //$c1->setModelo("BIC Cristal");
            $c1->modelo = "BIC";
            $c1->setPonta(0.6);
            print_r($c1);

            echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        ?>
    </pre>
</body>
</html>