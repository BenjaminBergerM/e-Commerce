<?php
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
        
    </ul>
   
</article>







<?php 
    include_once '_footer.php';
?>