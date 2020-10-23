x<?php

require 'conn.php';
//var_dump ($conn);
$sql = "insert into devis (prinProduits) VALUES (1)";
$res = mysqli_query ($conn, $sql);
if ($res == true){
    echo "1";
}

$pick = "select * from devis order by id desc limit 5";
$res_pick = mysqli_query ($conn, $pick);
$arrs = mysqli_fetch_all ($res_pick);
print_r ($arrs);

?>
