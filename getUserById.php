<?php

    $user_id = "";
    
    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
    }

    if(!empty($user_id)){
        $serverName = "localhost";
        $userName = "root";
        $password = "omar404";
        $dbname ="hotels";

        $conn = new mysqli($serverName, $userName, $password, $dbname);

        if($conn-> connect_error){
            die("Connection feild: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users WHERE user_id = '".$user_id."'";

        $result = $conn->query($sql);
        $resultArray = array();

        while($row = mysqli_fetch_assoc($result)){
            $resultArray[] = $row;
        }

        echo json_encode($resultArray);

        $conn->close();

    }





?>