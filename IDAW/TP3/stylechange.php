<?php
    session_start();

    $style='';
    if(isset($_GET['css'])){
        setcookie('style',$_GET['css']);
    }
    else{
        setcookie('style', 'style1');
    }

    if(isset($_COOKIE['style'])){
        $style=$_COOKIE['style'];
    }
    else{
        $style='style1';
    }

    $login=$_SESSION['login'];

?>

<!doctype html>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Style Choice</title>
            <?php echo "<link rel='stylesheet' href='$style.css' type='text/css' media='screen' title='default' charset='utf-8' />"?>
        </head>
        <nav class='container'>
            <ul class= 'menu'>
                <li><a href='stylechange.php'>Changer Style</a></li>
                <li><a href='chien.php'>Un Chien</a></li>
            <ul>
        </nav>
        <body class='container'>
            <div class='head'>
                <h1>Bienvenue <?php echo $login?> !</h1>
                <h3>Choose Your Style !</h3>
                <form id='style_form' action='stylechange.php' method='GET'>
                    <select name='css'>
                        <option value='style1'>style1</option>
                        <option value='style2'>style2</option>
                    </select>
                    <input type='submit' value='Appliquer'/>
                </form>
            </div>
        </body>
    </html>