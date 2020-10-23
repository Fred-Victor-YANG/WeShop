<?php
    require "conn.php";
    $imgname = $_FILES['edit_myfile']['name'];
    $tmp = $_FILES['edit_myfile']['tmp_name'];
    $filepath = 'D:/phpstudy_pro/WWW/WeShop_0911/images/';
    copy($tmp,"images/".$imgname);


    $data = $_POST;
    $id = $data['edit_id'];
    $title = $data['edit_title'];
    $description = $data['edit_description'];
    $status = $data['edit_status'];
    $url = $data['edit_url'];
    $date = $data['edit_date'];


    if(move_uploaded_file($tmp,$filepath.$imgname)){
        $imageUrl = "images/".$imgname;
        $sql = "UPDATE wechatlist set title='$title', description='$description', 
        imageUrl='$imageUrl', status='$status',url='$url',reg_time='$date' WHERE id=$id ";
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }else{
        $sql = "UPDATE wechatlist set title='$title', description='$description', 
        status='$status',url='$url',reg_time='$date' WHERE id=$id ";
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>