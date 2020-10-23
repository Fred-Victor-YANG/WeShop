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
                            <a class="col-xs-offset-1"  href="index.php"><i class="glyphicon glyphicon-home"></i> 首页</a>
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
                            <a class="col-xs-offset-1" style="color:black;" href="tweetWechat.php"><i class="glyphicon glyphicon-picture"></i> 微信推文</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xs-10">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li><a href="index.php">首页</a></li>
                        <li class="active">微信推文</li>
                    </ol>
                </div>
                <div class="container-fluid">
                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#add">新增推送</button>
                    <!-- col-xs-6有漂浮，需要去除漂浮，不然margin值无效 -->
                    <div class="clearfix"></div>
                    <table id= "tableTweet" class="table table-striped table-bordered" style="margin-top:20px;">
                        <thead>
                            <tr>
                                <!-- 宽度不固定 -->
                                <th>ID</th>
                                <th width="120px">主题</th>
                                <th width="80px">状态</th>
                                <th width="200px">描述</th>
                                <th width="200px">推送网址</th>
                                <th width="140px">图片</th>
                                <th width="160px">添加时间</th>
                                <th width="100px">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'conn.php';
                            $fh = mysqli_query($conn, "select MAX(id) from wechatlist");
                            $c_echo = mysqli_fetch_array($fh);
                            $maxid = number_format($c_echo['MAX(id)'], 0);
							$id = 1;
                            while ($id <= $maxid) {
                                $sql = "SELECT * FROM wechatlist WHERE ID = '" . $id . "'";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['title'] . "</td>";
                                    echo "<td>" . $row['status'] . "</td>";
                                    echo "<td>" . $row['description'] . "</td>";
                                    echo "<td>" . $row['url'] . "</td>";
                                    echo "<td align=\"center\"><img src=\"" . $row['imageUrl'] . "\" style=\"width: 160px; height: 106px;\"></td>";
                                    echo "<td>" . $row['reg_time'] . "</td>";
                                    echo "<td><button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#edit\" id=\"btn-deal$id\" onclick=\"edit($id)\">修改</button> 
                                            <button class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#delete\" id=\"btn-delete$id\" onclick=\"transferId($id)\">删除</button>
                                            </td>";
                                    echo "</tr>";
                                }
                                $id = $id + 1;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 向模态框传值的隐藏input -->
            <input type="hidden" id="currentId">
            <!-- 空跳转 -->
            <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>  
        </div>
        <!-- bootstrap modal 修改top：50px -->
        <div class="modal fade" id="add">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">新增推文</h4>
                    </div>
                    <form action="addTweet.php" method="post"  id="formTweet" target="nm_iframe" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>标题</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="请输入推文标题" required="required">
                            </div>
                            <div class="form-group">
                                <label>描述</label>
                                <input type="text" name="description" id="description" class="form-control" placeholder="请输入推文描述">
                            </div>
                            <div class="form-group">
                                <label>链接</label>
                                <input type="text" name="url" id="url" class="form-control" placeholder="请输入推文链接" required="required">
                            </div>
                            <div class="form-group">
                                <label>图片</label>
                                <!-- <input type="text" name="imageUrl" id="imageUrl"  class="form-control" placeholder="请输入图片url"> -->
                                <input type="file" name="myfile"  accept="image/jpeg,image/gif,image/png" required="required"/>
                            </div>
                            <div class="form-group">
                                <label>日期</label>
                                <input type="date" name="date" id="date"  class="form-control" placeholder="请输入日期如2020-09-28" required="required">
                            </div>
                            <div class="form-group">
                                <label>状态</label>
                                <select name="status" id = "status" class="form-control" required="required">
                                    <option value="1">显示</option>
                                    <option value="0">不显示</option>
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
        <!-- edit admin -->
        <div class="modal fade" id="edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">修改推文信息</h4>
                    </div>
                    <form id="formModify" action="changeTweet.php" method="POST" target="nm_iframe" enctype="multipart/form-data" >
                        <div class="modal-body"> 
                            <div class="form-group">
                                <input type="hidden" id="edit_id" name="edit_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>标题</label>
                                <input type="text" id="edit_title" name="edit_title" class="form-control" placeholder="请输入推文标题">
                            </div>
                            <div class="form-group">
                                <label>描述</label>
                                <input type="text" id="edit_description" name="edit_description" class="form-control" placeholder="请输入推文描述">
                            </div>
                            <div class="form-group">
                                <label>链接</label>
                                <input type="text" id="edit_url" name="edit_url" class="form-control" placeholder="请输入推文链接">
                            </div>
                            <div class="form-group">
                                <label>图片</label>
                                <input type="file" id="edit_myfile" name="edit_myfile"  accept="image/jpeg,image/gif,image/png"/>
                            </div>
                            <div class="form-group">
                                <label>日期</label>
                                <input type="date" id="edit_date" name="edit_date" class="form-control" placeholder="请输入图片url">
                            </div>
                            <div class="form-group">
                                <label>状态</label>
                                <select name="edit_status" id="edit_status" class="form-control">
                                    <option value="1">显示</option>
                                    <option value="0">不显示</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">关闭</button>
                            <input type="submit" class="btn btn-success" value="确认">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- delete -->
        <div class="modal fade" id="delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">删除推送</h4>
                    </div>
                    <div class="modal-body">
                        <!-- 默认输出 -->
                        <p id="body">确定删除该推送？</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button class="btn btn-success" onclick="del()">确定</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            checkToken();
            $(function () {
                for (var i = 1; i < tableTweet.rows.length; i++) {
                    if (tableTweet.rows[i].cells[2].innerHTML == 1) {
                        tableTweet.rows[i].cells[2].innerText = "显示";
                    } else {
                        tableTweet.rows[i].cells[2].innerText = "不显示";
                    }
                }
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
            function del() {
                var id = $("#currentId").val();
                $.ajax({url: 'changeData.php', type: 'post', data: {table: 'wechatlist', sql: 'DELETE FROM wechatlist WHERE id=' + id + ';'}}).done(function (msg) {
                    location.replace(window.location.href);
                })
            }

            //向模态框传值
            function transferId(id) {
                $("#currentId").val(id);
            }

            function edit(id) {
                transferId(id);
                $("#edit_id").val(id);
                for (var i = 0; i < tableTweet.rows.length; i++) {
                    if (tableTweet.rows[i].cells[0].innerHTML == id) {
                        $("#edit_title").val(tableTweet.rows[i].cells[1].innerHTML);
                        if(tableTweet.rows[i].cells[2].innerHTML=="显示"){
                            $("#edit_status").val(1);
                        }else{
                            $("#edit_status").val(0);
                        }
                        $("#edit_description").val(tableTweet.rows[i].cells[3].innerHTML);
                        $("#edit_url").val(tableTweet.rows[i].cells[4].innerHTML);
                        $("#edit_date").val(tableTweet.rows[i].cells[6].innerHTML);
                    }

                }
            }

            //提交表单后执行
            $('#formTweet').submit(function () {
                $("#add").modal('hide');
            });
            $('#formModify').submit(function () {
                $("#edit").modal('hide');
            });

            $('#add').on('hidden.bs.modal', function () {
                window.location.reload(true);
            })
            $('#edit').on('hidden.bs.modal', function () {
                window.location.reload(true);
            })
        </script>
    </body>