<?php
    require 'conn.php';

    $data = $_POST;
    $account = $data['account'];

    $sql = "UPDATE adminlist set isonline = 0 WHERE account = '$account'";

    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>