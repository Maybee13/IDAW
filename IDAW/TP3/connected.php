<?php
    $conn= mysqli_connect("localhost", "root", "", "testIDAW");
    $sql="SELECT * FROM testtp3";
    $result=$conn->query($sql);

    $login="anonymous";
    $password="anonymous";
    $errorText="";
    $successfullyLogged=false;

    if(isset($_POST['login'])&&isset($_POST['password'])){
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        $existe=false;
        while ($data=mysqli_fetch_array($result)){
            if($data['login']==$tryLogin){
                $existe=true;
                if($data['password']==$tryPwd){
                    $successfullyLogged=true;
                    $login=$tryLogin;
                    $password=$tryPwd;
                }
                else{
                    $existe=false;
                }
            }
        }
        if(!$existe){
            $errorText="Erreur de login/password";
        }
    }
    else{
        $errorText="Merci d'utiliser le formulaire de login";
    }

    if(!$successfullyLogged){
        echo $errorText;
    }
    else{
        session_start();
        $_SESSION['login']=$login;
        $_SESSION['password']=$password;
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='styleIndex.css' type='text/css' media='screen' title='default' charset='utf-8' />
            <title>TP3</title>
        </head>
        <body>
        <h1>Bienvenue $login</h1>
        <nav>
        <ul>
            <li><a href='stylechange.php'>Changer Style</a></li>
            <li><a href='chien.php'>Un Chien</a></li>
        <ul>
        </nav>
        </body>
        </html>";
    }

    ?>

    