<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
    if (!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "root";
        $dbname = "golden_bear_resort";

        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO users (username, password) values ('$username','$password')";
            if ($conn->query($sql)){
                header("Location: index.php?create_success");
            }
            else{
                header("Location: index.php?create_failure=" . $sql)
                    . $conn->error;
            }
            $conn->close();
        }
    }
    else{
        header("Location: index.php?create_failure1");
        die();
    }
}
else{
    header("Location: index.php?create_failure2");
    die();
}
?>