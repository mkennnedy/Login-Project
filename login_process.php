<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    include('db_connect.php');

    
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $_SESSION['username'] = $email;
        header("Location: index.php");
        exit();
    } else {
   
        $_SESSION['login_error'] = "Invalid email or password";
        header("Location: index.php");
        exit();
    }


    $conn->close();
} else {
   
    header("Location: index.php");
    exit();
}
?>
