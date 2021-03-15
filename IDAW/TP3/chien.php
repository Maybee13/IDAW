<?php
    session_start()
?>

<!doctype html>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Un Chien</title>
            <link rel='stylesheet' href='stylechien.css' type='text/css' media='screen' title='default' charset='utf-8' />
        </head>
        <nav class='container'>
            <ul class= 'menu'>
                <li><a href='stylechange.php'>Changer Style</a></li>
                <li><a href='chien.php'>Un Chien</a></li>
            <ul>
        </nav>
        <form id="logout" action="disconnected.php" method="POST">
            <input type="submit" value="Déconnexion"/>
        </form>
        <body class='container'>
            <div class='head'>
                <h1>Bienvenue <?php echo $_SESSION['login']?> !</h1>
                <h3>Regardez le piti chien !</h3>
                <img src='doggie.jpg'>
            </div>
        </body>
        
    </html>