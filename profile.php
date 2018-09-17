<?php
session_start();
include_once 'controllers/sessionController.php';
include_once 'controllers/filesController.php';
include_once '_header.php';
?>
<article class="perfil">
 
<h1>Bienvenido <?= user()['username']?></h1>

    <img style="width: 50%;" src="archivos/<?= user()['profilePic'] ?>" alt="Foto" class = 'fotoPerfilGrande'>
    <ul>
        <li><h5> <?= user()['username'];?> </h5></li>
        <li><h5>Nombre: <?= user()['name']?></li>
        <li><h5>Apellido: <?= user()['lastName']?></li>
        <li><h5>Email: <?= user()['email'] ?></h5></li>
        
    </ul>
   
</article>







<?php 
    include_once '_footer.php';
?>