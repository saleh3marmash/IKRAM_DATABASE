<?php
try{
    $con=mysqli_connect('localhost','root','AaAa*2461949');
    if($con){
        $sql = "CREATE DATABASE IF NOT EXISTS hotels";
        if ($con->query($sql) === TRUE) {
            echo "Database created succefully";
        }else{
            echo "Database creation failed";
        }
        $sql = "use hotels";
        $con->query($sql);
        $sql = "CREATE TABLE IF NOT EXISTS users (
            user_id INT AUTO_INCREMENT PRIMARY KEY,
            user_password VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL UNIQUE,
            age INT NOT NULL
        )";
        // Execute the query
        if ($con->query($sql) === TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error creating table: " . $con->error;
        }
    }
    else{
        echo "connection failed";
        echo "Failure";
    }
}catch(Error $e){
    echo($e->getMessage());
}