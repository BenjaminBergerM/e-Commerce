<?php 
require_once 'controllers/registerController.php'; 
require_once 'controllers/validationController.php'; 
require_once 'controllers/sessionController.php';
if($_POST){
    $oldUser=bringUser($_POST['email']);
    if($oldUser==null){
        $user=createUser($_POST['name'],$_POST['lastName'],$_POST['username'], $_POST['email'],$_POST['date'], $_POST['password'],$_POST['comfirmPassword']);
        $errors = validateRegister($user);
        if (count($errors) === 0) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            saveUser($user);
            $_SESSION['user'] = $user;
    }
}else {
    $errors['email'] = 'El email ya está usado.';
}
}
echo var_dump($user['date'])
?>
    <?php require_once '_header.php'?>
<?php 
if(isset($errors) && count($errors) > 0): ?>
<div>
    <ul>
        <?php foreach ($errors as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

        <div class="login-form">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Sign Up</h3>
                <label for="name">Nombre:</label>
                <input type="text" name="name">
                <label for="">Apellido:</label>
                <input type="text" name="lastName">
                <label for="">Username:</label>
                <input type="text" name="username">
                <label for="">Email:</label>
                <input type="email" name="email">
                <label for="">Fecha de Nacimiento:</label>
                <input type="date" name="date">
                <label for="file">Password:</label>
                <input type="password" name ="password">
                <label for="">Comfirmar Password:</label>
                <input type="password" name="comfirmPassword">
                <input type="submit">
            </form>
        </div>

        <?php require_once '_footer.php'?>