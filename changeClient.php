<?php
    require "conn.php";
    $imgname = $_FILES['edit_myfile']['name'];
    $tmp = $_FILES['edit_myfile']['tmp_name'];
    $filepath = 'D:/phpstudy_pro/WWW/WeShop_0911/images/';
    copy($tmp,"images/".$imgname);


    $data = $_POST;
    $id = $data['edit_id'];
    $company = $data['edit_company'];
    $companyCn = $data['edit_companyCn'];
    $address = $data['edit_address'];
    $description = $data['edit_description'];
    $descriptionCn = $data['edit_descriptionCn'];
    $status = $data['edit_status'];


    if(move_uploaded_file($tmp,$filepath.$imgname)){
        $imageUrl = "images/".$imgname;
        $sql = "UPDATE clientlist set societe='$company',societeCn='$companyCn', description='$description', 
        descriptionCn='$descriptionCn', address='$address', imageUrl='$imageUrl', status='$status' WHERE id=$id ";
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }else{
        $sql = "UPDATE clientlist set societe='$company',societeCn='$companyCn', description='$description', 
        descriptionCn='$descriptionCn', address='$address', status='$status' WHERE id=$id ";
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>