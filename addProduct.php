<?php
    require 'conn.php';

    $data = $_POST;
    $title = $data['title'];
    $titleCn = $data['titleCn'];
    $description = $data['description'];
    $descriptionCn = $data['descriptionCn'];
    // $url = $data['url'];
    $status = $data['status'];

    
    require 'uploadPhoto.php';

    $sql = "INSERT INTO productlist (title,titleCn,description,descriptionCn,imageUrl,status) 
    VALUES ('$title', '$titleCn','$description', '$descriptionCn','$imageUrl', '$status');";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>