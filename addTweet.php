<?php
    require 'conn.php';

    $data = $_POST;
    $title = $data['title'];
    $description = $data['description'];
    // $imageUrl = $data['imageUrl'];
    $status = $data['status'];
    $url = $data['url'];
    $date = $data['date'];


    require 'uploadPhoto.php';
    

    $sql = "INSERT INTO wechatlist (title, description, imageUrl, status,url,reg_time) 
    VALUES ('$title', '$description', '$imageUrl', '$status','$url','$date');";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>