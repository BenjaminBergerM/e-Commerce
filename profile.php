<?php
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
        
    </ul>
   
</article>







<?php 
    include_once '_footer.php';
?>