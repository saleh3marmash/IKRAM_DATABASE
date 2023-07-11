<?php
if(!empty($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['age']) ){
    $con=mysqli_connect('localhost','root','AaAa*2461949');
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    if($con){
        $sql='insert into users (user_id,user_password,email,age) values (\"$username\",\"$password\",\"$email\",\"$age\")';
        if ($con->query($sql) === TRUE) {
            echo "Username inserted successfully!";
        } else {
            echo "Error inserting data " . $conn->error;
        }
    }
}