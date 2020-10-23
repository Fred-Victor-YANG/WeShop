<?php
    require 'conn.php';
    $table=$_POST['table'];
    $sql = $_POST['sql'];
    class Product {
        public $title;
        public $titleCn;
        public $imageUrl;
        public $description;
        public $descriptionCn;
    }

    class Tweet{
        public $title;
        public $imageUrl;
        public $description;
        public $reg_time;
        public $url;
    }

    class Client{
        public $societe;
        public $address;
        public $description;
        public $imageUrl;
    }

//echo " 2 ";
    $result = mysqli_query($conn, $sql);
//var_dump ($result);
//echo "<br>";

    if($table == "productlist"){
        if($result) {
            //echo "3";
            while ($row = mysqli_fetch_array($result)) {
                if($row["status"]==1){
//echo $row["title"]." ";
//echo $row["titleCn"]." ";
                    $product = new Product();
                    $product->title = $row["title"];
                    $product->titleCn = $row["titleCn"];
                    $product->imageUrl = $row["imageUrl"];
                    $product->description = $row["description"];
                    $product->descriptionCn = $row["descriptionCn"];
                    $data[]=$product;
                }
            }
            $json = json_encode($data);
            echo $json;
        } 
    }else if ($table == "wechatlist"){
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                if($row["status"]==1){
                    $tweet = new Tweet();
                    $tweet->title = $row["title"];
                    $tweet->imageUrl = $row["imageUrl"];
                    $tweet->description = $row["description"];
                    $tweet->reg_time = $row["reg_time"];
                    $tweet->url = $row["url"];
                    $data[]=$tweet;
                }
            }
            $json = json_encode($data);
            echo $json;
        }
    }else if ($table == "clientlist"){
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                if($row["status"]==1){
                    $client = new Client();
                    $client->societe = $row["societe"];
                    $client->address = $row["address"];
                    $client->imageUrl = $row["imageUrl"];
                    $client->description = $row["description"]; 
                    $data[]=$client;
                }
            }
            $json = json_encode($data);
            echo $json;
        }
    }else if ($table == "clientlistCn"){
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                if($row["status"]==1){
                    $client = new Client();
                    $client->societe = $row["societeCn"];
                    $client->address = $row["address"];
                    $client->imageUrl = $row["imageUrl"];
                    $client->description = $row["descriptionCn"]; 
                    $data[]=$client;
                }
            }
            $json = json_encode($data);
            echo $json;
        }
    }
    $conn->close();
