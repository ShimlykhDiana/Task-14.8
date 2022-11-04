
<?php

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

$users = [
    'admin' => ['id' => 'Alice', 'password' => '1ded1ec345ac322f70619ba28233b570'],
    'user' => ['id' => 'Geralt', 'password' => '0b23afeaa7b3861c71298776bb83ed4e'],
    'passerby' => ['id' => 'Shinobu', 'password' => '58477cbecba217743c16473b3db1c001'],
];

switch (null !== $username || null !== $password) {

   
    case md5($password) === $users['admin']['password']:
    
        
        session_start(); 
        

        $_SESSION['auth'] = true; 
        $_SESSION['id'] = $users['admin']['id']; 
        $_SESSION['login'] = $username; 
        break;
    case md5($password) === $users['user']['password']:
           
           session_start(); 

           $_SESSION['auth'] = true; 
           $_SESSION['id'] = $users['user']['id']; 
           $_SESSION['login'] = $username; 
           break;
    case md5($password) === $users['passerby']['password']:
    
           
           session_start(); 
           $_SESSION['auth'] = true; 
           $_SESSION['id'] = $users['passerby']['id']; 
           $_SESSION['login'] = $username; 
           break;
        default:
        echo 'This account doesn\'t exist <a href="login.php">Sign in</a>';

    }

$auth = $_SESSION['auth'] ?? null;
if ($auth) {
    header ("location: index.php")
?>

<?php }