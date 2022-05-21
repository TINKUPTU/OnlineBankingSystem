<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' type='text/css' href='css/style.css' />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Welcome to Spark Banking Forums</title>
    </head>

<body style="background-image: url('img/balanceCheck.jpg');background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <style>
    .formin {
        border-radius: 20px;
        width: 380px;
        height: 50px;
        padding: 5px 5px 5px 15px;
    }

    .mybtn {
        margin-bottom: 10px;
        box-shadow: 2px 2px 10px black;
        border-radius: 30px;

        font-weight: bold;
        color: white;
    }

    .mybtn:active {
        background-color: black;
        color: white;
    }
    </style>



    <center>
        <div class="container" style="margin-top: 10%; padding:10px 100px 10px 10px; ">
            <div
                style="width:40%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Balance Check</h1>
            </div>

            <div class="container"
                style=" backdrop-filter: blur(5px);  border-radius:5px; padding: 10px 10px 10px 10px; margin-top:50px; width:40%;">
                <form action="check_blc.php" method="post">
                    <input type="text" class="formin form-control" name="accno" id="" placeholder="Account Number"><br>
                    <br><input class="btn mybtn btn-outline-light" type="submit" value="Submit"><br><br>
                    <p style="color:white;">Don't remember your account number? check <a href="all_cust.php">here</a>
                    </p>
                </form>
            </div>
        </div>


        <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $accno = $_POST['accno'];
    
    $sql = "SELECT blc FROM accountholder where accno='$accno'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success align-items-center text-center" style="width:25%;" role="alert">
         <h2> <i class="fas fa-rupee-sign" aria-hidden="true"></i>'.mysqli_fetch_assoc($result)['blc'].'</h2></div>';
    }else{
        echo '<div class="alert alert-danger align-items-center text-center" style="width:34%;" role="alert">
        <div><h2>
        <i class="fas fa-times-circle"></i>
        Something went wrong!</h2>
        </div>
      </div>';
    }
}
}


?>
    </center>

    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>