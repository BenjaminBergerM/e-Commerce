<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<?php require_once '_header.php'?>
        <div class="login-form">
            <form action="" method="post">
                <h3>Sign Up</h3>
                <label for="">Nombre:</label>
                <input type="text">
                <label for="">Apellido:</label>
                <input type="text">
                <label for="">Email:</label>
                <input type="email">
                <label for="">Fecha de nacimiento:</label>
                <input type="date">
                <label for="">Contrasenia:</label>
                <input type="password">
                <label for="">Comfirmar Contrasenia:</label>
                <input type="password">
                <input type="submit">
            </form>
        </div>
        <?php require_once '_footer.php'?>