<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page</title>
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
                    <li id="registro"><a class="nav-a" href="signUp.php">Sign Up</a></li>
                    <p>/</p>
                    <li id="registro"><a class="nav-a" href="login.php">Login</a></li>
                    <li><i class="fas fa-user-circle fa-2x"></i></li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <section class="banner">
            <div></div>
            <form action="" method="POST">
                <select name="materia" id="">
                    <option value="math">Matematicas</option>
                    <option value="his">Historia</option>
                    <option value="geo">Geografia</option>
                </select>
                <input type="text" placeholder="¿Dónde estás buscando?">
                <input type="submit" value="Buscar">
            </form>
        </section>
        <section class="pasos">
            <h2>Encontra profesores en tres simples pasos</h2>
            <article>
                <h2>Busca</h2>
                <i class="fas fa-search"></i>
            </article>
            <article>
                <h2>Elegi</h2>
                <i class="fas fa-chalkboard-teacher"></i>
            </article>
            <article>
                <h2>Aprende</h2>
                <i class="fab fa-leanpub"></i>
            </article>
        </section>
        <section class="categoria">
            <h3>Busca por categoria</h3>
            <article> <a href="#">Matematicas</a> </article>
            <article> <a href="#">Historia</a> </article>
            <article> <a href="#">Geografia</a> </article>
            <article> <a href="#">Economia</a> </article>
            <article> <a href="#">Teoria Contable</a> </article>
            <article> <a href="#">Dibujo</a> </article>
            <article> <a href="#">Ingles</a> </article>
            <article> <a href="#">Frances</a> </article>
            <article> <a href="#">Canto</a> </article>
            <article> <a href="#">Baile</a> </article>
        </section>
    </main>
    <footer>
        <ul>
            <li><a href="#">Terminos y condiciones</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li>
                <ul class="redes">
                    <li class="iconoF"><a href="https://www.facebook.com/"><i class="fab fa-facebook-square" ></i></a></li>
                    <li class="iconoF"><a href="https://www.twitter.com/"><i class="fab fa-twitter-square" ></i></a></li>
                </ul>
            </li>
        </ul>
    </footer>
</body>
</html>