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


<body style="background-image: url('img/customer2.jpg');background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <style>
    th,
    td {
        text-align: center;
    }
    </style>

    <center>
        <div class="container" style="margin-top: 10%; padding:10px 40px 10px 40px; background-image: url('img/customer3.jpg');background-size: cover; background-repeat: no-repeat; ">
            <div
                style="width:40%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Customer Details</h1>
            </div>

            <?php
    $con = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `accountholder`";
        $result = mysqli_query($con, $sql);
?>
            <table class="table table-light table-hover table-bordered" style="margin-top: 30px; background-image: url('img/customer3.jpg');background-size: cover; background-repeat: no-repeat; ">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Account No</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Send Money From</th>
                    </tr>
                </thead>

                <style>
                .mybtn {

                    box-shadow: 2px 2px 10px black;
                    border-radius: 30px;
                    font-weight: bold;
                    background-color: lightgreen;
                    color: green;
                }

                .mybtn:active {
                    background-color: green;
                    color: lightgreen;
                }
                </style>
                <?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        echo    '
            <tr>
              <td>'.$row['name'].'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['accno'].'</td>
              <td>'.$row['blc'].'</td>
              <td style="padding:10px 10px 10px 10px">
              <a href="send_money.php?reads='.$row['accno'].'"
              <button type="button" class="btn mybtn btn-outline-light">Send Money</button>
              </a>
              </td>
            </tr>';
    }
    
    }
    echo "</tbody>";
?>
            </table>
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