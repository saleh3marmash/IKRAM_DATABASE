<?php
$servername = "sql8.freemysqlhosting.net";
$username = "sql8631827";
$password = "2IfWRAqIUS";
$database = "sql8631827";
$port = 3306;
$con = mysqli_connect($servername, $username, $password, $database, $port);
if(!empty($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['age']) ){
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
    $con->close();
}