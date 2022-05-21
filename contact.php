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

<body style="background-image: url('statics/contactbg.jpg'); background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover; ">
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`name`, `phone`,`email`, `message`) VALUES ('$name','$phone', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if($result){
       
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        Thank you '.$name.' for contacting us!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Oops '.$name.'! Something went wrong!!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
}
}

?>

    <style>
    .formin {
        border-radius: 20px;
        width: 380px;
        height: 50px;
        padding: 5px 5px 5px 15px;
    }
    </style>

    <center>
        <div class="container " style="padding:10px 80px 10px 80px; margin-top:2%;  ">
            <div
                style="width:80%; background-color:gray; padding:5px 5px 5px 5px; border-radius:20px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Contact Us</h1>
            </div>

            <div class="container"
                style="  backdrop-filter: blur(5px);  border-radius:15px; padding: 20px 30px 20px 30px; margin-top:50px; width:60%;">
                <div class="card border-0 shadow my-5 py-5" style="background-image: url('img/contact1.jpg');background-size: cover; background-repeat: no-repeat; border-radius:20px; ">
                    <form action="contact.php" method="post">
                        <input type="text" class="formin form-control" name="name" id="name"
                            placeholder="Enter Your Name"><br><br>
                        <input type="tel" class="formin form-control" name="phone" id="phone"
                            placeholder="Enter Your Phone Number"><br><br>
                        <input type="email" class="formin form-control" name="email" id="email"
                            placeholder="Enter Your Email"><br><br>
                        <textarea name="message" class="" style="border-radius:20px; padding: 5px 5px 5px 15px;"
                            placeholder="Enter your message" rows="5" cols="47" id=""></textarea>
                        <br><br><button class="btn btn-primary" type="submit">submit</button>
                    </form>
                </div>
            </div>

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