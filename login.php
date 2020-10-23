<?php
/*
 使用composer安装php-jwt，接收到登录用户名和密码后，PHP验证用户名和密码是否正确
（实际开发中应该结合数据库，从数据库里拿用户名和密码比对，本实例为了演示只做简单验证），
如果用户名和密码准确无误，那么就签发token，在token中，我们可以定义token的签发者
、过期时间等等，并返回给前端。注意在签发token时，我们需要定义一个密钥，这个密钥是一个私钥，
实际应用中是保密的不可告诉别人。
 * */
require_once './php-jwt-master/src/JWT.php';
require 'conn.php';

use \Firebase\JWT\JWT;

define('KEY', '1gHuiop975cdashyex9Ud23ldsvm2Xq'); //密钥

$action = isset($_GET['action']) ? $_GET['action'] : '';
if ($action == 'login') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $account = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
        $data = ['userid' => 1, 'username' => $username];
        //从数据库验证登录信息
        $sql = "SELECT * FROM adminlist WHERE account = '$account' and password = '$password' and status = 1";
        $result = $conn->query($sql);


        //用户名和密码正确，则签发token
        if ($result->num_rows > 0) { 
			$sql = "UPDATE adminlist set isonline = 1 WHERE account= '$account'";
			$result = $conn->query($sql);
            $nowtime = time();
            $token   = [
                'iss'  => 'http://www.weshop.fr ', //签发者
                'aud'  => $_SERVER['REMOTE_ADDR'], //jwt所面向的用户
                'iat'  => $nowtime, //签发时间
                'exp'  => $nowtime + 28800, //过期时间-10min
                'data' => $data
            ];
            $jwt     = JWT::encode($token, KEY);
            header("Authorization:$jwt");
            $res = array('code' => 200, 'msg' => '登录成功', 'data' => $data);
        } else {
            $res = array('code' => 300, 'msg' => '登录失败，请输入正确的账号密码');
        }
    }
    die(json_encode($res));
} else {
    // 不是登录状态，想直接访问，如果没有本地保存token，则无法访问
	$data = $_POST;
    $jwt = $data['jwt'];


    //没有token
    if ($jwt == "null"|| empty($jwt)) {
        $res = array('code' => 301, 'msg' => 'You do not have permission to access...');
        die(json_encode($res));
    }
    //以下是有token的情况
    try {
        JWT::$leeway = 60;//当前时间减去60，把时间留点余地
        //HS256方式，Jwt包自带的方法，这里要和签发的时候对应
        $token = JWT::decode($jwt, KEY, ['HS256']);
    } 
	catch (Exception $exception) {
        $res = array('code' => 302, 'msg' => $_SERVER['HTTP_AUTHORIZATION']);
        die(json_encode($res));
    }


    // 疑似窃取用户Token攻击行为:请求的客户端ip已经改变, 拒绝请求
    // if ($token->aud !== $_SERVER['REMOTE_ADDR']) {
    //     $res['msg'] = "请求的客户端ip已经改变, 拒绝请求";
    // }


    // token过了有效期$token->exp小于当前时间, 第一种方法自动更新，第二种方法再次登录
    if ($token->exp < time()) {
        $token        = (array)$token;
        $nowtime      = time();
        $token['iat'] = $nowtime; //签发时间
        $token['exp'] = $nowtime + 600; //过期时间-10min;
        $jwt = JWT::encode($token, KEY);
        $res = array('code' => 200, 'msg' => $jwt);
        die(json_encode($res));
        header("Authorization:$jwt");
    }

    $res = array('code' => 200, 'msg' => 'success');
    die(json_encode($res));

}