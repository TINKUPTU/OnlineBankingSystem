<?php
// $showAlert = false;
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST["loginEmail"];
    $password = $_POST["loginPass"];
   
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows == 1){
        $row=mysqli_fetch_assoc($result);
            if (password_verify($password, $row['user_pass'])){ 
                // $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['sno'] = $row['sno'];
                $_SESSION['useremail'] = $user_email;
                echo "loged in";
               
            } 
            
         header("location: /forum/index.php");
        
    } 
    header("location: /forum/index.php");

    // else{
    //     $showError = "Invalid Credentials";
    // }
}
    
?>
