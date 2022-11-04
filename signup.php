
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
  <title>Salt Sea Spa</title>
  <link rel="stylesheet" href="style.css" type="text/css"/>
  </head>
  <?php
session_start();

$auth = $_SESSION['auth'] ?? null;
  if(!$auth) { ?>
 <body id="login">
<div class="login"> 
    <form action="index.php" method="post">
        <p class="p">Username: <input name="login" type="text" placeholder="username"value="<?php if (isset($_SESSION['login'])) echo $_SESSION['login']; ?>">
        
        <p class="p">Password: <input name="password" type="password" placeholder="password" value="<?php if (isset($_SESSION['password'])) echo $_SESSION['password']; ?>">
        
        <p class="p">Date of Birth: <input type="date" id="start" name="date" value="" min="1980-01-01" max="2022-10-30" value="<?php if (isset($_SESSION['date'])) echo $_SESSION['date']; ?>"> 
        <input class="btn" name="submit" type="submit"  value="sign in">
        <div class="form-group">
		<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#" class="a2">Terms of Use</a> & <a href="#" class="a2">Privacy Policy</a></label>
        </div>
        <p class="p3"> Do you have an account?  <a class="a1" href="login.php"> Click here </a>
    </form>
</div>
	
<!-- <a href="admin.php?do=logout">logout</a> -->
</body>
</html>
<?php }

else header("location: index.php")
// контент для администратора

?>


<?php

if (!empty($_POST)){
    
    require "functions.php";

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $date = $_POST['dateOfBirth'] ?? '';
    
    if (checkPassword($login, $password)){
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        setcookie('dateOfBirth', $date, 0, '/');
        header('Location: index.php');
    } else {
        $error = 'Error';
    }
}
?>