<?php
try{
        $servername = "sql8.freemysqlhosting.net";
        $username = "sql8631827";
        $password = "2IfWRAqIUS";
        $database = "sql8631827";
        $port = 3306;
        $con = mysqli_connect($servername, $username, $password, $database, $port);

    if($con){
        $sql = "CREATE DATABASE IF NOT EXISTS sql8631827;";
        if ($con->query($sql) === TRUE) {
            echo "Database created succefully";
        }else{
            echo "Database creation failed";
        }
        $sql = "use sql8631827;";
        $con->query($sql);
        $sql = "CREATE TABLE IF NOT EXISTS users (
            user_id VARCHAR(255) PRIMARY KEY,
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
        $con->close();
    }
    else{
        echo "connection failed";
        echo "Failure";
    }
}catch(Error $e){
    echo($e->getMessage());
}