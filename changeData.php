<?php
    require 'conn.php';
    $table=$_POST['table'];
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


    if($table == "productlist"){
        $sql= 'SELECT * FROM productlist;';
        $result = mysqli_query($conn, $sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                if($row["status"]==1){
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
        $sql= 'SELECT * FROM wechatlist;';
        $result = mysqli_query($conn, $sql);
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
        $sql= 'SELECT * FROM clientlist';
        $result = mysqli_query($conn, $sql);
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
        $sql= 'SELECT * FROM clientlist';
        $result = mysqli_query($conn, $sql);
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
