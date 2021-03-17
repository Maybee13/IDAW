<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='styleIndex.css' type='text/css' media='screen' title='default' charset='utf-8' />
    <title>TP3</title>
</head>
<body>
    <h1> Veuillez vous connecter, jeune Viking !</h1>
    <div class='container'>
        <form id="login_form" action="connected.php" method="POST">
            <table>
                <tr>
                    <th>Login :</th>
                    <td><input type="text" name="login"></td>
                </tr>
                <tr>
                    <th>Mot de passe :</th>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Se connecter..."/></td>
                </tr>
            </table>
        </form>
    </div>
    <div>
        <img src='valhallart.png'>
    </div>
</body>
</html>


