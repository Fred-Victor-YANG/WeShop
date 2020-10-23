<?php
    require 'conn.php';
    $table=$_POST['table'];
    $sql = $_POST['sql'];

    class Admin {
        public $account;
        public $password;
        public $name;
        public $id;
    }

    if($table == "getAdmin"){
        $result = $conn->query($sql);
        if($result) {
            //echo "查询成功";
            while ($row = mysqli_fetch_array($result)) {
                    $admin = new Admin();
                    $admin->account = $row["account"];
                    $admin->password = $row["password"];
                    $admin->name = $row["name"];
                    $admin->id = $row["id"];
                    $data[]=$admin;
            }
            //把数据转换为JSON数据.
            $json = json_encode($data);
            echo $json;
        } else {
            echo "查询失败";
        }
    }else if($table == "wechatListImage"){
        // $imgname = $_FILES['edit_myfile']['name'];
        // $tmp = $_FILES['edit_myfile']['tmp_name'];
        // $filepath = 'images/';

        // if(move_uploaded_file($tmp,$filepath.$imgname)){
        //     $imageUrl = "images/".$imgname;
        //     echo "上传成功";
        // }else{
        //     echo "上传失败";
        // }
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{
        if ($conn->query($sql) === TRUE) {
            // echo "新记录修改成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    


    
    $conn->close();
?>