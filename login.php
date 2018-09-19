<?php
session_start();
require_once 'controllers/helpers.php';
require_once 'controllers/loginController.php';
require_once 'controllers/sessionController.php';
if ($_POST){
    $verify = verifyUser($_POST['email'],$_POST['password']);
    if ($verify){
        $user = bringUser($_POST['email']);
        $_SESSION['user'] = $user;
        redirect('profile.php');
    } else {
        $errors['email'] = "El usuario o la password es incorrecto.";
    }
}


if (check()) {
    redirect('profile.php');
}

?>

<?php require_once '_header.php'?>
<?php
    if (isset($errors['email'])) {
        echo $errors['email'];
    }
?>
<div class="login-form">
    <form action="" method="post">
    <h3>Login</h3>
        <label for="">Email:</label>
        <input type="email" name="email">
        <label for="">Contrasenia:</label>
        <input type="password" name="password">
        <label for=""><input type="checkbox" name="remindme">  Recordar mi Contrasenia</label>
        <input type="submit">
    </form>
</div>
<?php require_once '_footer.php'?>
