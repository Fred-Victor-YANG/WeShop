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
<!-- 目前的想法是超级管理员有权限使用，其他管理员只能修改自己 -->
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
                        <!-- 修改bootstrap.min才有用，直接改bootstrap没用 -->
                        <a class="col-xs-offset-1"  href="index.php"><i class="glyphicon glyphicon-home"></i> 首页</a>
                    </li>
                    <li>
                        <a class="col-xs-offset-1" style="color:black;" href="admin.php"><i class="glyphicon glyphicon-user"></i> 管理员</a>
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
                    <li class="active">管理员</li>
                </ol>
            </div>
            <div class="alert alert-danger alert-dismissible" id="alert">
                <strong>失败，</strong> 只有超级管理员可修改管理员信息。
            </div>
            <div class="container-fluid">
                <form class="form-inline col-xs-6" id="formSearch" target="nm_iframe">
                    <div class="form-group">
                        <label>姓名</label>
                        <input type="text" id="search" name="search" placeholder="请输入姓名" class="form-control">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </form>
                <button class="btn btn-success pull-right" data-toggle="modal" data-target="#add">新增管理员</button>
                <!-- col-xs-6有漂浮，需要去除漂浮，不然margin值无效 -->
                <div class="clearfix"></div>
                <table id="tableAdmin" class="table table-striped table-bordered" style="margin-top:20px;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>账号</th>
                            <th>姓名</th>
                            <th style = "display: none;">状态</th>
                            <th>最后登录时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'conn.php';
                            $fh = mysqli_query($conn,"select MAX(id) from adminlist");
                            $c_echo = mysqli_fetch_array($fh);
                            $maxid = number_format($c_echo['MAX(id)'],0);
							$id = 1;
                            while ($id <= $maxid) {
                                $sql = "SELECT * FROM adminlist WHERE ID = '".$id."'";
                                $result = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['account'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td style = \"display: none;\">" . $row['status'] . "</td>";
                                    echo "<td>" . $row['loginTime'] . "</td>";
                                    echo "<td><button class=\"btn btn-warning btn-xs\" id=\"btn-deal$id\" onclick=\"deal($id)\">未开启</button> 
                                        <button class=\"btn btn-info btn-xs\" id=\"btn-changeInfo$id\" onclick=\"changeInfo($id)\">修改</button>
                                        <button class=\"btn btn-danger btn-xs\" id=\"btn-delete$id\" onclick=\"deleteAdmin($id)\">删除</button>
                                        </td>";
                                    echo "</tr>";
                                }
                                $id = $id+1;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 向模态框传值的隐藏input -->
        <input type="hidden" id="newId">
        <!-- 空跳转 -->
        <iframe id="id_iframe" name="nm_iframe" style="display: none"></iframe>  
    </div>
    <!-- bootstrap modal 修改top：50px -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">新增管理员</h4>
                </div>
                <form action="addAdmin.php" method="post"  id="formAdmin" target="nm_iframe">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>账号</label>
                            <input type="text" name="account" id="account" class="form-control" placeholder="请输入英文账号" required="required">
                        </div>
                        <div class="form-group">
                            <label>密码</label>
                            <input type="password" name="psd" id="psd" class="form-control" placeholder="请输入密码" required="required">
                        </div>
                        <div class="form-group">
                            <label>姓名</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="请输入姓名" required="required">
                        </div>
                        <div class="form-group">
                            <label>状态</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">开启</option>
                                <option value="0">关闭</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">关闭</button>
                        <input class="btn btn-success" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--  changeInfo -->
    <div class="modal fade" id="changeInfo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">修改管理员信息</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>账号</label>
                        <input type="text" id="edit_account" name="edit_account" class="form-control" placeholder="请输入账号">
                    </div>
                    <div class="form-group">
                        <label>密码</label>
                        <input type="password" id="edit_password" name="edit_password" class="form-control" placeholder="请输入新密码，不输入默认不修改密码">
                    </div>
                    <div class="form-group">
                        <label>姓名</label>
                        <input type="text" id="edit_name" name="edit_name" class="form-control" placeholder="请输入姓名">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button class="btn btn-success" onclick="modify()">确定</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">删除管理员</h4>
                </div>
                <div class="modal-body">
                    <!-- 默认输出 -->
                    <p id="bodyDel">确定删除该管理员？</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">取消</button>
                    <button class="btn btn-success" data-dismiss="modal" onclick="del()">确定</button>
                </div>
            </div>
        </div> 
    </div>


    <script  type="text/javascript">
        checkToken();
        var role = localStorage.getItem("account");
        $(function(){ 
            $("#alert").hide();
            for(var i=0;i<tableAdmin.rows.length;i++){
                if(tableAdmin.rows[i].cells[3].innerHTML == 1){
                    var row = tableAdmin.rows[i].cells[0].innerHTML;
                    $("#btn-deal"+row).removeClass("btn-warning");
                    document.getElementById("btn-deal"+row).setAttribute("class","btn-xs btn-success");
                    document.getElementById("btn-deal"+row).innerHTML = "启用中";
                }
            }
        });


        function showAlert(){
            $("#alert").fadeTo(2000, 300).slideUp(300, function(){
                $("#alert").hide();
            });
        }

        //search
        $("form#formSearch").submit(function(){ 
            var admin = $("#search").val();
            if(admin!=""){
                for(var i=0;i<tableAdmin.rows.length;i++){
                    if(tableAdmin.rows[i].cells[2].innerHTML != admin&&i!=0){
                        tableAdmin.rows[i].style.display="none";
                    }
                }
            }else{
                for(var i=0;i<tableAdmin.rows.length;i++){
                    tableAdmin.rows[i].style.display="";
                }
            }
        });


        //提交表单后执行
        $('#formAdmin').submit(function () {
            $("#add").modal('hide');
        });
        //模态框关闭后刷新父页面指定方法！！！
        $('#add').on('hidden.bs.modal', function () {
            window.location.reload(true);
        })
        $('#changeInfo').on('hidden.bs.modal', function () {
            window.location.reload(true);
        })
        $('#delete').on('hidden.bs.modal', function () {
            window.location.reload(true);
        })

        function transferId(id){
            $("#newId").val(id);
        }




        function changeInfo(id){
            if(role!="superAdmin"){
                showAlert();
            }else{
                $("#changeInfo").modal('show');
                transferId(id);
                for(var i=0;i<tableAdmin.rows.length;i++){
                    if(tableAdmin.rows[i].cells[0].innerHTML == id){
                        $("#edit_account").val(tableAdmin.rows[i].cells[1].innerHTML);
                        $("#edit_name").val(tableAdmin.rows[i].cells[2].innerHTML);
                    }
                }
            }
        }

        function deleteAdmin(id){
            if(role!="superAdmin"){
                showAlert();
                $("#delete").modal('hide');
            }else{
                transferId(id);
                $("#delete").modal('show');
            }
        }


        function modify(){
            if(role!="superAdmin"){
                $("#changeInfo").modal('hide');
                showAlert();
            }else{
                var id = $("#newId").val();
                var account =  $("#edit_account").val();
                var password = $("#edit_password").val();
                var name = $("#edit_name").val();
                if(password!=""){
                    $.ajax({ url: 'changeData.php',type: 'post',data:{table:'adminlist',sql: 'UPDATE adminlist SET account = \''+account+'\', password = \''+password+'\', name = \''+name+'\' WHERE id='+id+';'}}).done(function(msg){
                        location.replace(window.location.href);
                    })
                }else{
                    $.ajax({ url: 'changeData.php',type: 'post',data:{table:'adminlist',sql: 'UPDATE adminlist SET account = \''+account+'\', name = \''+name+'\' WHERE id='+id+';'}}).done(function(msg){
                        location.replace(window.location.href);
                    }) 
                }
            }
        }
		
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



        function deal(id){
            if(role!="superAdmin"){
                showAlert();
                $("#deal").modal('hide');
            }else{
                var row = 0;
                for(var i=0;i<tableAdmin.rows.length;i++){
                    if(tableAdmin.rows[i].cells[0].innerHTML==id){
                        row = i;
                    }
                }
                if(tableAdmin.rows[row].cells[3].innerHTML == 0){
                    $("#btn-deal"+id).removeClass("btn-warning");
                    document.getElementById("btn-deal"+id).setAttribute("class","btn-xs btn-waring");
                    document.getElementById("btn-deal"+id).innerHTML = "启用中";
                    //ajax跨域调用php
                    $.ajax({ url: 'changeData.php',type: 'post',data:{table:'adminList',sql: 'UPDATE adminlist SET status=1 WHERE id='+id+';'}}).done(function(msg){
                        //这里刷新方法到时候用具体的网址，不然从别的如index.php过来，页面会刷新到index.php！
                        location.replace(window.location.href);
                    })
                }
                else{
                    $("#btn-deal"+id).removeClass("btn-warning");
                    document.getElementById("btn-deal"+id).setAttribute("class","btn-xs btn-success");
                    document.getElementById("btn-deal"+id).innerHTML = "未开启";
                    //ajax跨域调用php
                    $.ajax({ url: 'changeData.php',type: 'post',data:{table:'adminList',sql: 'UPDATE adminlist SET status=0 WHERE id='+id+';'}}).done(function(msg){
                        location.replace(window.location.href);
                    })
                }
            }
        }

        function del(id){
            var id = $("#newId").val();
            var row = 0;
            for(var i=0;i<tableAdmin.rows.length;i++){
                if(tableAdmin.rows[i].cells[0].innerHTML==id){
                    row = i;
                }
            }
            $.ajax({ url: 'changeData.php',type: 'post',data:{table:'adminList',sql: 'DELETE FROM adminlist WHERE id='+id+';'}}).done(function(msg){
                //window.location.href当前URL
                //window.referrer来路Url即上一个网页的URL
                location.replace(window.location.href);
            })
        }
    </script>
</body>