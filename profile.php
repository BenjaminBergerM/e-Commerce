<?php
<<<<<<< HEAD
    include_once 'controllers/sessionController.php';
    include_once 'controllers/filesController.php';
    // Si esta logeado puede entrar a esta pagina
    include_once '_header.php';
    var_dump (user());
?>
<article class="perfil">
 
<h1>Bienvenido <?= user()['username']?></h1>

    <!-- <img src="img/<?= user()['fotoPerfil'] ?>" alt="Foto" class = 'fotoPerfilGrande'> -->
    <ul>
        <li><h5> <?= user()['username'];?> </h5></li>
        <li><h5>Nombre: <?= user()['nombre']?></li>
        <li><h5>Apellido: <?= user()['apellido']?></li>
        <li><h5>Email: <?= user()['email'] ?></h5></li>
=======
require_once 'helpers.php';

require_once '_header.php';
?>
<article class="perfil">
 
<h1>Bienvenido <?= user()->getUsername() ?></h1>

    <img style="width: 50%;" src="archivos/<?= user()->getFotoPerfil() ?>" alt="Foto" class = 'fotoPerfilGrande'>
    <ul>
        <li><h5> <?= user()->getUsername();?> </h5></li>
        <li><h5>Nombre: <?= user()->getName() ?></li>
        <li><h5>Apellido: <?= user()->getLastname() ?></li>
        <li><h5>Email: <?= user()->getEmail() ?></h5></li>
>>>>>>> c6d27758b7e48c80f9ba39eb1756d819bd616145
        
    </ul>
   
</article>







<?php 
    include_once '_footer.php';
?>