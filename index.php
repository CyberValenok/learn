<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

include 'header.php';


?>
<div class="col-md-4 col-md-offset-4">
    <form action="/index.php" id="reg" method="post">
    create users--->
        <p><input type="text" name="login" placeholder="username" class="form-control"></p>
        <p><input type="password" name="pass" placeholder="password" class="form-control"></p>
        <p><button type="submit" name="sign_up" class="btn btn-success">Sign up</button></p>
    </form>
</div>


<?
$username=$_POST['login'];

$pass=$_POST['pass'];
if($username=='' or $pass==''){
    echo "<br>Введите корректные данные";
    exit();
}
$pass_hash=password_hash($pass, PASSWORD_DEFAULT);

$ctdb='mysql:host=learn;dbname=learn';
$pdo=new PDO($ctdb, 'mysql','mysql');
$db='INSERT INTO user(NAME,PASSWORD) VALUES(:NAME,:PASSWORD)';
$query = $pdo->prepare($db);
$query->execute(['NAME'=>$username,'PASSWORD'=>$pass_hash]);
?>
 
<div class="col-md-4 col-md-offset-4">
    <form action="/index.php" id="auth" method="post">
    login in account--->
        <p><input type="text" name="login" placeholder="username" class="form-control"></p>
        <p><input type="password" name="pass" placeholder="password" class="form-control"></p>
        <p><button type="submit" name="sign_in" class="btn btn-success">Sign in</button></p>
    </form>
</div>
<?
include 'footer.php';
?>
 
