<?php
$insert = FALSE;
if (isset($_POST['name'])){

$_SERVER = "Localhost";
$username = "root";
$password = "";

$con = mysqli_connect($_SERVER, $username, $password);

if (!$con){
    die("Connection to this database is faild due to". mysqli_connect_error());
}
// echo "Success Cotections to the database!!";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
 $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//  echo $sql;

 if ($con -> query($sql) == TRUE){
    // echo "Successfully inserted";
    $insert = TRUE;
 }
 else{
    echo "ERROR: $sql <br> $con -> error";
    // $insert = TRUE;
 }

$con -> close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sriracha&display=swap');
        </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="" srcset="IIT Kharagpur">
    <div class="contener">
        <h1>Welcome To IIT Kharagpur US Trip Form</h1>
        <p>Enter Your Details and submit is form to confirm your tickit in this trip</p>
        <?php
        if ($insert == TRUE){
        echo "<p class='submitmsg'>Thanks for submiting Your Form. We are happy to see you joining  for the US Trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Geder">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
            <textarea name="desc" id="desc" placeholder="Enter Any Other Details"></textarea>
            <button class="btn">Submit</button>
        </form>
        </div>
    <script src="index.js"></script>
    
</body>
</html>