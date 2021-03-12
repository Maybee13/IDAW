<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests PHP</title>
</head>
<body>
    La date d'aujourd'hui est le :
    <?php
        echo date("d/m/Y");

        $i=1;
        while($i<=10){
            echo "<br> $i";
            $i++;
        }

        function afficher($texte,$saut=1){
            echo "<br> $texte";
            for($i=0;$i<$saut;$i++){
                echo "\n";
            }
        }
        afficher("Hello", 0);
        afficher("World !");

        $tab=array(17,-3);
        echo "<br> tab :";
        print_r($tab);
        unset($tab[0]);
        echo "<br> tab :";
        print_r($tab);
        $tab=array(17,-3);
        foreach($tab as $value){
            echo "<br>".$value;
        }
    ?>
</body>
</html>