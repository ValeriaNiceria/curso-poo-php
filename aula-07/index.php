<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Objetos Compostos em PHP</title>
    <style>
        body{
            font-family:sans-serif;
        }
        h1{
            color:red;
            text-shadow: 2px 2px 8px #FF7788;
        }
    </style>
</head>
<body>
    <h1>ULTRA EMOJI COMBAT</h1>
    <pre>
        <?php
            require_once 'Lutador.php';

            $l = new Lutador("Pretty Boy", "França", 31, 1.75, 60.9, 11, 3, 1);
          

            $l->apresentar();
            $l->ganharLuta();
            $l->status();

            
           
        ?>
    </pre>
</body>
</html>