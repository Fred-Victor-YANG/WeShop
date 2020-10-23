<?php
    require 'conn.php';

    $data = $_POST;
    $societe = $data['company'];
    $societeCn = $data['companyCn'];
    $status = $data['status'];
    $description = $data['description'];
    $descriptionCn = $data['descriptionCn'];
    $address = $data['address'];
    // $imageUrl = $data['url'];

    require 'uploadPhoto.php';

    $sql = "INSERT INTO clientlist (societe,societeCn, status, description,descriptionCn, address,imageUrl) 
    VALUES ('$societe', '$societeCn',$status, '$description','$descriptionCn', '$address','$imageUrl');";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>