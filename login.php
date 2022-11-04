
<?php
session_start();

$auth = $_SESSION['auth'] ?? null;

if(!$auth) { ?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
  <title>Salt Sea Spa</title>
  <link rel="stylesheet" href="style.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aclonica" />
 </head>
 <body>
 <section id="banner"> 
  <div class="banner-text">
    <h1>Salt Sea Spa </h1>
    <p>More than just spa. A real piacere. </p>  
 </div>

<div class="div2"> 
    <form action="users.php" method="post">
    <p class="p">Username: <input name="login" type="text" placeholder="username">
        <p class="p">Password: <input name="password" type="password" placeholder="password">
        <input class="btn" name="submit" type="submit" value="Submit">
        
    </form>
</div>
</section>
</body>
</html>

<?php }

else header("location: index.php")
// контент для администратора

?>