function checkToken(){
	var jwt = localStorage.getItem("jwt");
    $.ajax({
        type: 'post',
        url: 'login.php',
        headers: {
            'Authorization': localStorage.getItem("jwt")
        },
        data: {jwt: jwt},
        async: true,
        dataType: 'json',
        success: function (data, status, xhr) {
            if(data.code!=200){
                window.location.href="login.html";
            }
            //如果响应头接收到了Authorization，则将本地jwt更新
            if (xhr.getResponseHeader('Authorization')) {
                localStorage.setItem("jwt", jwt);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
			alert("error");
            window.location.href="login.html";
        }
    });
}
