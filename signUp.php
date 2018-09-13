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
<body>
    <header>
        <nav>
            <ul>
                <div>
                    <li class="header-i"><i class="fas fa-graduation-cap"></i></li>
                    <li><a class="nav-a" href="index.php">Discite</a></li>
                </div>
                <div>
                    <li id="registro"><a class="nav-a" href="login.php">Login</a></li>
                    <li><i class="fas fa-user-circle fa-2x"></i></li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
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
    </main>
    <footer>
        <ul>
            <li><a href="#">Terminos y condiciones</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li>
                <ul class="redes">
                    <li class="iconoF"><a href="https://www.facebook.com/"></a><i class="fab fa-facebook-square" ></i></li>
                    <li class="iconoF"><a href="https://www.twitter.com/"></a><i class="fab fa-twitter-square" ></i></li>
                </ul>
            </li>
        </ul>
    </footer>
</body>
</html>