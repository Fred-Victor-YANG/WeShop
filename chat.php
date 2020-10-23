<?php
$host = '192.168.1.153';
?>
<!DOCTYPE html>
<html lan="zh-CN">
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Weshop后台</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/checkToken.js"></script>
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
            integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
            crossorigin="anonymous"
            />
        <link rel="stylesheet" href="css/chat.css" />
    </head>

    <body>
        <!-- 导航条颜色从default改 -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header"> 
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#info">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" src="index.php">
                        <img src="images/logo.png" alt="bootstrap后台" style="width:80px">
                    </a>
                    <a class="navbar-brand" src="index.php" style="color: aliceblue;">后台管理</a>
                </div>
                <div id="info" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right"> 
                        <li class="dropdown">
                            <a href="#" style="color: aliceblue;" class="dropdown-toggle" data-toggle="dropdown">admin <span style="color: aliceblue;"class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="info.php">个人资料</a></li>
                                <li><a href="javascript:void(0);" onclick="logout()">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- 百分百container -->
        <div class="container-fluid" style="margin-top: 50px;">
            <div class="row col-xs-2" >
                <!-- !! -->
                <nav class="row navbar navbar-default" style="height:1000px">
                    <ul class="nav" style="margin-top: 30px;">
                        <li>
                            <a class="col-xs-offset-1" href="index.php"><i class="glyphicon glyphicon-home"></i> 首页</a>
                        </li>
                        <li>
                            <a class="col-xs-offset-1" href="admin.php"><i class="glyphicon glyphicon-user"></i> 管理员</a>
                        </li>
                        <li>
                            <a class="col-xs-offset-1" href="listClient.php"><i class="glyphicon glyphicon-user"></i> 客户信息</a>
                        </li>
                        <li>
                            <a class="col-xs-offset-1" href="listDevis.php"><i class="glyphicon glyphicon-list"></i> Devis订单</a>
                        </li>
                        <li>
                            <a class="col-xs-offset-1  text-muted" style="color:black;" href="chat.php"><i class="glyphicon glyphicon-picture"></i> 在线客服</a>
                        </li>
                        <li>
                            <a class="col-xs-offset-1" href="listProduct.php"><i class="glyphicon glyphicon-list"></i> 产品列表</a>
                        </li>
                        <li>
                            <a class="col-xs-offset-1" href="tweetWechat.php"><i class="glyphicon glyphicon-picture"></i> 微信推文</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="chat-container">
                <header class="chat-header">
                    <h1><i class="fas fa-comments"></i> 在线客服</h1>
                </header>
                <main class="chat-main">
                    <div class="chat-sidebar">
                        <h3><i class="fas fa-comments"></i> 状态:</h3>
                        <p id="chat_status" class="chat_status">Disconnected</p>
                        <p id="socket_status" class="chat_status">Websocket Disconnected</p>
                        <button id="change_status" class="ui button">切换登录状态</button>
                        <h3><i class="fas fa-users"></i> 用户： </h3>
                        <ul id="users"></ul>
                    </div>
                    <div class="show-area"></div>
                </main>

                <div class="chat-form-container">
                    <input name="ip" id="name" type="text" placeholder="Sending to IP" disabled="" class="ui fluid icon input" style="border: 0; display: none;">
                    <div class="ui fluid action input">
                        <input name="message" id="message" type="text" placeholder="Enter Message">
                        <div class="ui button" class="btn" id="btn-send"><i class="fas fa-paper-plane"></i> 发送</div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.9.4/qs.js" integrity="sha51253y53BQwxZvk4YGd9SkHPqI7nDwlIIFZ4D2BSJG08Co7y6O3YsWeRtO6trPtdoyqfTCTkTbCulNosIAI6E4UvQ==" crossorigin="anonymous"></script>

        <!--检测是否有人工在线-->
        <?php
        require 'conn.php';
        $status = mysqli_query($conn, "SELECT COUNT(isOnline) FROM adminlist WHERE isOnline = 1");
        $res = mysqli_fetch_array($status);
        echo '<script>console.log("status of online in db : "' + $res[0] + ');</script>';
        if ($res[0] != 0) {
            $online = 1;
            echo '<script>console.log ("client is online");</script>';
        } else if ($res[0] == 0) {
            $online = 0;
            echo '<script>console.log ("client is offline");</script>';
        } else {
            echo '<script>console.log ("error");</script>';
        }
        require_once 'config.php';
        ?>

        <!--监测IP-->
        <?php
        $ip_local = gethostbyname($_ENV['COMPUTERNAME']); //获取服务端的局域网IP 
        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        $ip_public = $m[1] //赋值客户端外网IP
        ?>
        <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
        <script type="text/javascript">
            checkToken(); 
				
			function logout() {
			    // alert(123);
			    var accountAdmin = localStorage.getItem("account");
			    $.ajax({
			        url: 'logout.php',
			        type: 'post',
			        data: {
			            account: accountAdmin
			        }
			    }).done(function(msg) {
			        window.location = "login.html";
			    })
			}
            var ip_extern = returnCitySN["cip"];
            var ip_intern = "<?php echo $ip_local; ?>";
            var online = "<?php echo $online; ?>";
            if (online == '1') {
                document.getElementById('chat_status').innerHTML = 'Connected';
            } else if (online == '0') {
                document.getElementById('chat_status').innerHTML = 'Disconnected';
            }
            $('#change_status').click(function () {
                var status = $('#chat_status').text();
                console.log(status);
                $.get("./chat_data.php?act=change_status", {status: status});
                window.location.reload();
            });
            var server_ip = "<?php echo $server_ip; ?>";
            var server_port = "<?php echo $server_port; ?>";
        </script>

        <!--人工客服实时聊天，功能实现都在chat.js文件里，socket.js是引用的库-->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/socket.js"></script>
        <script src="js/backend.chat.io.js"></script>
        
        <!--加载历史聊天记录-->


    </body>
</html>
