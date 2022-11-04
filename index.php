<?php session_start();
$auth = $_SESSION['auth'] ?? null;
include_once('functions.php');
?>

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
    <?php if(!$auth){
    
    echo '
    <div class="banner-btn"> 
      <a href="signup.php"><span></span>Sign up</a> 
      <a href="login.php"><span></span>Sign in</a> 
    </div>';
  
  } else {
    echo'<p style="color: rgb(26, 58, 56);font-size:1.25em;text-shadow:white;" >'.'Welcome back, ' . getCurrentUser() . '!' . ' ' . '<a href="logout.php" style="text-decoration: none;color: rgb(2, 20, 31);">Log out</a></p>';
   
 }?>

</section>

<section id="service" ><h3>Service</h3> <div>
    <img src="./images/alex-bertha-Jyg7xHRmXiU-unsplash-2.jpg" id="mineral">MINERAL BATHS</img> <br>
    <img src="./images/christin-hume-0MoF-Fe0w0A-unsplash-2.jpg" id="wolf">WOLF CREEK CUB RUB</img><br>
    <img src="./images/rebootanika-by-foodism360-2Mqz_m7c6HU-unsplash.jpg" id="pagosa" >PAGOSA SALT STONE</img>
    <br>
    <img src="./images/diana-light-pBBxMUCgwuU-unsplash-2.jpg" id="scrub" >BODY SCRUB</img><br>
</div>
  </section>

<!-- <footer>
        <div class="links">
            <a href="#">Contacts</a>
            <a href="#">About us</a>
        </div>
        <br>
        <div class="copyright">Copyright © Sea Salt Spa 2022</div>
    </footer> -->

</body>
</html>
