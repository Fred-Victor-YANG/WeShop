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
                            <li><a href="login.html">退出</a></li>
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
                        <a class="col-xs-offset-1" style="color:black;" href="index.php"><i class="glyphicon glyphicon-home"></i> 首页</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1"  href="admin.php"><i class="glyphicon glyphicon-user"></i> 管理员</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1"  href="listClient.php"><i class="glyphicon glyphicon-user"></i> 客户信息</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1"  href="listDevis.php"><i class="glyphicon glyphicon-list"></i> Devis订单</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1"  href="chat.php"><i class="glyphicon glyphicon-picture"></i> 在线客服</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1"  href="listProduct.php"><i class="glyphicon glyphicon-list"></i> 产品列表</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1"  href="tweetWechat.php"><i class="glyphicon glyphicon-picture"></i> 微信推文</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-xs-10">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li><a href="index.php">首页</a></li>
                    <li class="active">详情</li>
                </ol>
            </div>
            <div class="container-fluid">
                <div class="col-xs-12">
                    <div class="col-xs-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge alert-success">19</span>今日浏览用户
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-success">5</span>今日咨询用户
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-success">6</span>今日生成Devis
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-success">6123</span>总浏览用户
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge alert-warning">19</span>今日浏览用户
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-warning">5</span>今日咨询用户
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-warning">6</span>今日生成Devis
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-warning">6123</span>总浏览用户
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge alert-danger">19</span>今日浏览用户
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-danger">5</span>今日咨询用户
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-danger">6</span>今日生成Devis
                            </li>
                            <li class="list-group-item">
                                <span class="badge alert-danger">6123</span>总浏览用户
                            </li>
                        </ul>
                    </div>  
                </div>
            </div>
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li><a href="index.php">首页</a></li>
                    <li class="active">公告</li>
                </ol>
            </div>
            <div class="panel-group" style="margin-left: 40px; margin-right: 40px;">
                <div class="panel panel-info">
                    <div class="panel panel-heading">
                        <h4 class="panel-title">
                            <a href="#not1" class="collapsed" data-toggle="collapse">管理员</a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="not1">
                        <div class="panel-body">公告内容，巴拉巴拉</div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</body>
<script>
    checkToken();
</script>