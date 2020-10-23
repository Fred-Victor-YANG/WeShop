<?php
require 'conn.php';
$act = $_GET['act'];
switch ($act) {
    case 'change_status':
        $status_now = $_GET['status'];
        if ($status_now == 'Connected') {
            $do = "UPDATE adminlist SET isOnline = '0'";
            $res = mysqli_query($conn, $do);
            if ($res == true) {
                echo '<script>console.log("status of connection changed to offline");</script>';
            } else {
                echo 'failed';
            }
        } else if ($status_now == 'Disconnected') {
            $do = "UPDATE adminlist SET isOnline = '1'";
            $res = mysqli_query($conn, $do);
            if ($res == true) {
                echo '<script>console.log("status of connection changed to online");</script>';
            } else {
                echo 'failed';
            }
        }
        break;
    case 'msg' :
        $socketID = $_GET['socketID'];
        $ip = $_GET['ip'];
        $msg = $_GET['msg'];
        $others = $_GET['others'];
        $do = "INSERT INTO msg (socketID, ip, msg, others) VALUES ('$socketID','$ip','$msg','$others')";
//$do = "insert into msg (socketID, ip, msg, others) values ('fdsfdsfdsafa', '192.168.1.1', '???????????', 'test')";        
$res = mysqli_query($conn, $do);
        if ($res == true) {
            echo '<script>console.log("msg stored to db");</script>';
        } else {
            echo 'failed';
        }
//$do = "SELECT * FROM msg ORDER BY id DESC LIMIT 10";
  //      $res = mysqli_query($conn, $do);
//var_dump ($res);
    //    $arrs = mysqli_fetch_all($res, MYSQLI_ASSOC);
//print_r ($arrs);
        break;
    case 'reload_chat_history':
        $client_ip = $_GET['ip'];
        $do = "SELECT * FROM (SELECT * FROM msg WHERE ip = '" . $client_ip . "' ORDER BY id DESC LIMIT 10)aa ORDER BY id";
        $res = mysqli_query($conn, $do);
//var_dump ($res);
        $arrs = mysqli_fetch_all($res, MYSQLI_ASSOC);
print_r ($arrs);
        $nums = mysqli_num_rows($res);
        foreach ($arrs as $value) {
            ?>
            <script>
                console.log("reload msg");
                ShowMyMsg(client_id, client_ip, "<?php echo $value['msg']; ?>");
            </script>
            <?php
        }
}
?>
