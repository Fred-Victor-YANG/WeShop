<?php
    require_once 'config.php';
    $imgname = $_FILES['myfile']['name'];
    $tmp = $_FILES['myfile']['tmp_name'];
    $filepath = $imgpath_back;
    copy($tmp,$imgpath_front.$imgname);
    if(move_uploaded_file($tmp,$filepath.$imgname)){
        $imageUrl = "images/".$imgname;
        echo "上传成功";
    }else{
        echo "上传失败";
    }
?>