<?php 
require_once 'controllers/registerController.php'; 
require_once 'controllers/validationController.php'; 
require_once 'controllers/sessionController.php';
require_once 'controllers/helpers.php';

if ($_POST && $_FILES)
{
    $oldUser = bringUser($_POST['email']);
    if ($oldUser==null){
        $user = createUser($_POST['name'], $_POST['lastName'], $_POST['username'], $_POST['email'],$_POST['date'], $_POST['password'],$_POST['comfirmPassword'], $_FILES['profilePic']);
        $errors = validateRegister($user);
        if (count($errors) === 0) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            saveUser($user);
            $_SESSION['user'] = $user;
            redirect("profile.php");
        }
    } else {
        $errors['email'] = 'El email ya está usado.';
    }
}

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
        <input type="text" name="name" value="<?= old('name') ?>">
        <label for="">Apellido:</label>
        <input type="text" name="lastName" value="<?= old('lastName') ?>">
        <label for="">Username:</label>
        <input type="text" name="username" value="<?= (isset($_POST['username'])) ? $_POST['username'] : "" ?>">
        <label for="">Email:</label>
        <input type="email" name="email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : "" ?>">
        <label for="">Fecha de Nacimiento:</label>
        <input type="date" name="date" value="<?= (isset($_POST['date'])) ? $_POST['date'] : "" ?>">
        <label for="file">Password:</label>
        <input type="password" name ="password">
        <label for="">Comfirmar Password:</label>
        <input type="password" name="comfirmPassword">
        <label for="">Foto de perfil:</label>
        <input type="file" name="profilePic">
        <input type="submit">
    </form>
</div>

    <?php require_once '_footer.php'?>

