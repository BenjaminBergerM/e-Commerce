<?php
require_once 'controllers/helpers.php';
require_once 'controllers/loginController.php';
require_once 'controllers/sessionController.php';

if ($_POST){
    $verify = verifyUser($_POST['email'],$_POST['password']);
    if ($verify){
        $user = bringUser($_POST['email']);
        redirect('profile.php');
    } else {
        $errors['email']="El usuario o la password es incorrecto.";
    }
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
        <label for=""><input type="checkbox">  Recordar mi Contrasenia</label>
        <input type="submit">
    </form>
</div>
<?php require_once '_footer.php'?>