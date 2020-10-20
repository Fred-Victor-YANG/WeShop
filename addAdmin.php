<?php
    require 'conn.php';

    $data = $_POST;
    $account = $data['account'];
    $psd = $data['psd'];
    $name = $data['name'];
    $status = $data['status'];

    $sql = "INSERT INTO adminList (account, password, name, status) 
    VALUES ('$account', '$psd', '$name', '$status');";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>