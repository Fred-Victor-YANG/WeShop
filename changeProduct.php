<?php
    require "conn.php";
    $imgname = $_FILES['edit_myfile']['name'];
    $tmp = $_FILES['edit_myfile']['tmp_name'];
    $filepath = 'D:/phpstudy_pro/WWW/WeShop_0911/images/';
    copy($tmp,"images/".$imgname);


    $data = $_POST;
    $id = $data['edit_id'];
    $title = $data['edit_title'];
    $titleCn = $data['edit_titleCn'];
    $description = $data['edit_description'];
    $descriptionCn = $data['edit_descriptionCn'];
    $status = $data['edit_status'];


    if(move_uploaded_file($tmp,$filepath.$imgname)){
        $imageUrl = "images/".$imgname;
        $sql = "UPDATE productlist set title='$title', titleCn='$titleCn',description='$description', 
        descriptionCn='$descriptionCn',imageUrl='$imageUrl', status='$status' WHERE id=$id ";
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }else{
        $sql = "UPDATE productlist set title='$title', titleCn='$titleCn',description='$description', 
        descriptionCn='$descriptionCn',status='$status' WHERE id=$id ";
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>