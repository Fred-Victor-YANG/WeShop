<!DOCTYPE html>
<html lan="zh-CN">
<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Weshop后台</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<!-- 修改删除页面没有动态数据绑定，每一列宽度设置 -->
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
                            <li><a href="#info.php">个人资料</a></li>
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
                        <a class="col-xs-offset-1 text-muted" href="index.php"><i class="glyphicon glyphicon-home"></i> 首页</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1" href="admin.php"><i class="glyphicon glyphicon-user"></i> 管理员</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1"  href="listClient.php"><i class="glyphicon glyphicon-user"></i> 用户信息</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1" href="listDevis.php"><i class="glyphicon glyphicon-list"></i> Devis订单</a>
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
        <div class="col-xs-10">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li><a href="index.php">首页</a></li>
                    <li class="active">个人资料</li>
                </ol>
            </div>
            <div class="container-fluid">
                <form class="col-xs-4 col-xs-offset-2 ">
                    <div class="form-group">
                        <label >账号:</label>
                        <h4 id="account">88888888</h4>
                    </div>
                    <div class="form-group">
                        <label >姓名:</label>
                        <input type="text" class="form-control" id="name" name="name" value="张三">
                    </div>
                    <div class="form-group">
                        <label >密码:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                    </div>
                    <button class="btn btn-success" onclick="modify()">确认修改</button>
                </form>
            </div>
    <script  type="text/javascript">
        var account = localStorage.getItem("account");
        var pwd;
        var name;
        var id;
        $(function(){ 
            $.ajax({url: 'changeData.php', type: 'post', data: {table: 'getAdmin', sql: 'SELECT * FROM adminlist WHERE account=\''+account+'\';'}}).done(function (msg) {
                //php中json转js数组
                var data_obj = eval(msg);
                $("#account").text(data_obj[0].account);
                $("#pwd").val(data_obj[0].password);
                $("#name").val(data_obj[0].name);
                id = data_obj[0].id;
            })
        });
		
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

        function modify(){
            var password = $("#pwd").val();
            var name = $("#name").val();
            if(password!=""){
                $.ajax({ url: 'changeData.php',type: 'post',data:{table:'adminlist',sql: 'UPDATE adminlist SET password = \''+password+'\', name = \''+name+'\' WHERE id='+id+';'}}).done(function(msg){
                    location.replace(window.location.href);
                })
            }else{
                $.ajax({ url: 'changeData.php',type: 'post',data:{table:'adminlist',sql: 'UPDATE adminlist SET name = \''+name+'\' WHERE id='+id+';'}}).done(function(msg){
                    location.replace(window.location.href);
                }) 
            }
        }
    </script>
</body>