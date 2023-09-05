<?php
require_once "database.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email_address = $_POST['email_address'];
$password = md5($_POST['password']);
$userName = $_POST['userName'];

//empty validation
if(empty($first_name)||empty($last_name)||empty($phone)||empty($email_address)||empty($password)||empty($userName))
{
    header("Location:register.php?error=incomplete form!!");
}
// to store in database
else {

    $sql = "insert into register(full_name,email,gender,date_of_birth
    ,country_code,password)values('$first_name','$last_name','$phone','$email_address','$password','$userName')";
    mysqli_query($con, $sql);
    echo "New record added!";

    //CLOSING DATABASE
    mysqli_close($con);
}



?>
