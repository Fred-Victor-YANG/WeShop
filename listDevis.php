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
                        <a class="col-xs-offset-1" style="color:black;" href="listDevis.php"><i class="glyphicon glyphicon-list"></i> Devis订单</a>
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
                    <li class="active">Devis列表</li>
                </ol>
            </div>
            <div class="container-fluid">
                <form class="form-inline col-xs-6" id="formSearch" target="nm_iframe">
                    <div class="form-group">
                        <label>公司名</label>
                        <input type="text" id="search" name="search" placeholder="请输入公司名" class="form-control">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </form>
                <!-- col-xs-6有漂浮，需要去除漂浮，不然margin值无效 -->
                <div class="clearfix"></div>
                <table id="tableDevis" class="table table-striped table-bordered" style="margin-top:20px;">
                    <thead>
                        <tr >
                            <th width="25px">ID</th>
                            <th width="80px">主产品</th>
                            <th width="140px">其他产品</th>
                            <th width="100px">公司</th>
                            <th width="110px">邮箱</th>
                            <th width="80px">电话</th>
                            <th width="110px">地址</th>
                            <th >Message</th>
                            <th style="display:none;">状态</th>
                            <th width="90px" style="display:none;">时间</th>
                            <th width="110px">备注</th>
                            <th width="155px">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'conn.php';
                            $fh = mysqli_query($conn,"select MAX(id) from devis");
                            $c_echo = mysqli_fetch_array($fh);
                            $maxid = number_format($c_echo['MAX(id)'],0);
                            $id = $maxid;
                            while ($id >0) {
                                $sql = "SELECT * FROM devis WHERE ID = '".$id."'";
                                $result = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr style=\"height:105px\">";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['prinProduits'] . "</td>";
                                    echo "<td>" . $row['autreProduits'] . "</td>";
                                    echo "<td>" . $row['societe'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['telephone']. "</td>";
                                    echo "<td>" . $row['addresse'] .", ". $row['codePostale']. "</td>";
                                    echo "<td>" . "[".$row['reg_date']."]: ".$row['messages'] . "</td>";
                                    echo "<td>" . $row['remarkInfo'] . "</td>";
                                    echo "<td style=\"display:none;\" >" . $row['statut'] . "</td>";
                                    echo "<td style=\"display:none;\">" . $row['reg_date'] . "</td>";
                                    // 如果状态是0，显示处理，如果是1，显示已处理
                                    echo "<td><button class=\"btn btn-warning btn-xs\" id=\"btn-deal$id\" onclick=\"deal($id)\">未处理</button> 
                                            <button class=\"btn btn-info btn-xs\" data-toggle=\"modal\" data-target=\"#remark\" id=\"btn-remark$id\" onclick=\"showRemark($id)\">备注</button>
                                            <button class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#delete\" id=\"btn-delete$id\" onclick=\"transferId($id)\">删除</button>
                                            </td>";
                                    echo "</tr>";
                                }
                                $id = $id-1;
                            }
                        ?>
                    </tbody>
                </table>
                <div style="float: right; display:inline ; " >
                    <a style="display:inline ;">跳到</a>
                    <input type="text" id="targetPage" name="targetPage" style="width:60px;">
                    <button id="targetBtn" class="btn-info" onclick="targetPage()">确定</button>
                    <button class="btn-success" id="previousBtn" onclick="forward()" style="margin-left: 70px;">上一页</button>
                    <a id="currentPage" style="display:inline ;">1</a>
                    <p style="display:inline ;">/</p>
                    <a id="totalPage" style="display:inline ;">10</a>
                    <button class="btn-success" id="nextBtn" onclick="backward()">下一页</button>
                </div>
            </div>
        </div>
        <!-- 向模态框传值的隐藏input -->
        <input type="hidden" id="newId">
        <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>  
    </div>


    <!--  remark -->
    <div class="modal fade" id="remark">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">添加/修改备注信息</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>备注信息</label>
                        <textarea rows="10" name="message" class="form-control" id="message" placeholder="请输入备注信息"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button class="btn btn-success" data-dismiss="modal" onclick="addRemark()">确定</button>
                </div>
            </div>
        </div> 
    </div>


    <script type="text/javascript">
        var currentPage = 1;
        var totalPage = 100;
        //checkToken();
        $(function(){ 
            readCurrentPage();
            for(var i=0;i<tableDevis.rows.length;i++){
                if(i!=0){
                    tableDevis.rows[i].style.display="none";
                }
                if(tableDevis.rows[i].cells[9].innerHTML == 1){
                    var row = tableDevis.rows[i].cells[0].innerHTML;
                    $("#btn-deal"+row).removeClass("btn-warning");
                    document.getElementById("btn-deal"+row).setAttribute("class","btn-xs btn-success");
                    document.getElementById("btn-deal"+row).innerHTML = "已处理";
                }
            }
            //向下去整，有小数就加一
            totalPage =  Math.ceil((tableDevis.rows.length-1)/6);
            //第一次登录session中没有对应值
            if(readCurrentPage()!=null){
                currentPage = readCurrentPage();
            }else{
                storeCurrentPage(1);
            }
            
            $("#currentPage").html(currentPage);
            $("#totalPage").html(totalPage);
            showRow(currentPage);
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

        //保存浏览记录-->浏览页码
        function storeCurrentPage(pageNum){
            localStorage.setItem("currentPage", pageNum);
        }

        function readCurrentPage(){
            return localStorage.getItem("currentPage");
        }

        function showRow(pageNum){
            var num = pageNum
            $("#currentPage").html(currentPage);
            for(var i=1;i<tableDevis.rows.length;i++){
                if(i<=pageNum*6&&i>(pageNum-1)*6){
                    tableDevis.rows[i].style.display="";
                }else{
                    tableDevis.rows[i].style.display="none";
                }
            }
        }

        function forward(){
            if(currentPage>1){
                currentPage--;
                storeCurrentPage(currentPage);
                showRow(currentPage);
            }
        }

        function backward(){
            if(currentPage<totalPage){
                currentPage++;
                storeCurrentPage(currentPage);
                showRow(currentPage);
            }
        }

        function targetPage(){
            var targetNum = $("#targetPage").val();
            if(targetNum>0&&targetNum<=totalPage){
                currentPage = targetNum;
                storeCurrentPage(currentPage);
                showRow(targetNum);
            }
        }



        $("form#formSearch").submit(function(){ 
            for(var i=0;i<tableDevis.rows.length;i++){
                tableDevis.rows[i].style.display="";
            }
            var company = $("#search").val();
            if(company!=""){
                for(var i=0;i<tableDevis.rows.length;i++){
                    if(tableDevis.rows[i].cells[3].innerHTML != company&&i!=0){
                        tableDevis.rows[i].style.display="none";
                    }
                }
            }else{
                for(var i=1;i<tableDevis.rows.length;i++){
                    tableDevis.rows[i].style.display="none";
                }
                showRow(currentPage);
            }
        });


        function transferId(id){
            $("#newId").val(id);
        }

        //显示原有remark值
        function showRemark(id){
            transferId(id);
            var row = 0;
            for(var i=0;i<tableDevis.rows.length;i++){
                if(tableDevis.rows[i].cells[0].innerHTML==id){
                    row = i;
                }
            }
            $("#message").val(tableDevis.rows[row].cells[8].innerHTML);
        }

        //修改remark
        function addRemark(){
            var id = $("#newId").val();
            var remark = $("#message").val();
            $.ajax({ url: 'changeData.php',type: 'post',data:{table:'Devis',sql: 'UPDATE devis SET remarkInfo =\''+remark+'\' WHERE id='+id+';'}}).done(function(msg){
                location.replace(window.location.href);
            })
        }

        //这里id是id值
        function deal(id){
            var id = id;
            var row = 0;
            for(var i=0;i<tableDevis.rows.length;i++){
                if(tableDevis.rows[i].cells[0].innerHTML==id){
                    row = i;
                }
            }
            if(tableDevis.rows[row].cells[9].innerHTML == 0){
                $("#btn-deal"+id).removeClass("btn-warning");
                document.getElementById("btn-deal"+id).setAttribute("class","btn-xs btn-success");
                document.getElementById("btn-deal"+id).innerHTML = "已处理";
                //ajax跨域调用php
                $.ajax({ url: 'changeData.php',type: 'post',data:{table:'Devis',sql: 'UPDATE devis SET statut=1 WHERE id='+id+';'}}).done(function(msg){
                    location.replace(window.location.href);
                    shwoRow(currentPage);
                })
            }
            else{
                $("#btn-deal"+id).removeClass("btn-warning");
                document.getElementById("btn-deal"+id).setAttribute("class","btn-xs btn-waring");
                document.getElementById("btn-deal"+id).innerHTML = "未处理";
                //ajax跨域调用php
                $.ajax({ url: 'changeData.php',type: 'post',data:{table:'Devis',sql: 'UPDATE devis SET statut=0 WHERE id='+id+';'}}).done(function(msg){
                    location.replace(window.location.href);
                    shwoRow(currentPage);
                })
            }


        }
    </script>

    <!-- delete -->
    <div class="modal fade" id="delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">删除Devis</h4>
                </div>
                <div class="modal-body">
                    <!-- 默认输出 -->
                    <p id="bodyDel">确定删除该Devis？</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button class="btn btn-success" data-dismiss="modal" onclick="del()">确定</button>
                </div>
            </div>
        </div> 
    </div>
    <script>
        function del(){
            var id = $("#newId").val();
            $.ajax({ url: 'changeData.php',type: 'post',data:{table:'devis',sql: 'DELETE FROM devis WHERE id='+id+';'}}).done(function(msg){
                location.replace(window.location.href);
            })
        }
    </script>
</body>