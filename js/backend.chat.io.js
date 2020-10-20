const backend = $.websocket('ws://'+server_ip+':'+server_port);
var username = ip_extern;
var socketID;

$(window).bind('beforeunload', function () {

    backend.emit('test', socketID);

    //socket.emit("client disconnect", socketID);
});

/***
 * 
 * when the site refreshed
 * refresh the user list
 * tell the clients we reconnected
 * 
 ***/
$(window).load(function () {
    var chat_status = $('#chat_status').text();
    backend.emit('weshop reconnected', chat_status);
//    if (chat_status == 'Disconnected') {
//        backend.emit('weshop reconnected');
//    }
});

backend.on('disconnect', function () {
    $('#socket_status').fadeIn();
});

backend.on('connect_error', function () {
    window.location.reload();
    $('#socket_status').fadeIn();
});

backend.on('reconnect', function () {
    window.location.reload();
    $('#socket_status').fadeIn();
});

/***
 * 
 * When connected
 * tell the server our IP and let the server store the info
 * refresh the list of clients
 * 
 ***/
backend.on('connect', function (uid) {
    $('#socket_status').fadeOut();
    console.log('websocket connected with ID : ' + uid);
    socketID = uid;
    backend.emit('add user', username);
});
//when a new client comming or leaving, refresh the list
backend.on('user list', function (list) {
    userlist = $.parseJSON(list['users']);
    ids = $.parseJSON(list['ids']);
    console.log("ips = " + userlist);
    console.log("ids = " + ids);

    var items = [];
    var count = 0;
    //$('.show-area').html('');
    for (var i = 0; i < userlist.length; i++) {
        if (userlist[i] == username) {
            continue;
        } //dont add name of current user to list
        items.push('<li id="' + ids[i] + '">' + userlist[i] + '<br>' + ids[i] + '</li>');
        //$('.show-area').append('<div class="ui list" id="' + userlist[i] + '"></div>');
        count++;
    }
    if (count == 0) {
        items.push('<li>Waiting for client ...</li>');
    }
    $('#users>li').remove();
    $('#users').append(items.join(''));
});

/***
 * 
 * When received client msg
 * call a function to append the msg
 * store the msg into db done by server
 * 
 ***/
//if received msg from client we`re talking to, situ = 1, show the msg directly; if not, append the msg but hide it. ( situ = 0 )
function ShowClientMsg(situation, socketID, ip, msg) {
    if (situation == '1') {
        $('.show-area').append('<div class="' + socketID + '"><p class="message"><i class="glyphicon glyphicon-user"></i><span class="label label-primary">' + ip + '</span>' + msg + '</p></div>');
    } else if (situation == '0') {
        $('.show-area').append('<div class="' + socketID + '" style="display: none;"><p class="message"><i class="glyphicon glyphicon-user"></i><span class="label label-primary">' + ip + '</span>' + msg + '</p></div>');
    }
}

backend.on('client msg', function (data) {
    socketID = data.socketID;
    client = data.client;
    msg = data.msg;
    //$.get("./chat_data.php?act=msg", {socketID: socketID, ip: client, msg: msg, others: "msg online"});
    nameIsSet = $('#name').val();

    //add a client talking with automatically
    if (nameIsSet == "") {
        //if not chosen a client talking to, add the client as the target automatically
        $('#name').val(client + "/" + socketID);
        $('li#' + socketID).addClass("client-chosen");
        ShowClientMsg(1, socketID, client, msg);
    } else if (nameIsSet != "") {
        //else check if it`s a msg form whom we`re talking to
        if (nameIsSet == client + "/" + socketID) {
            //if received msg from the client we`re talking to, show the msg directly
            ShowClientMsg(1, socketID, client, msg);
        } else if (nameIsSet != client + "/" + socketID) {
            //if received msg from a client we`re not talking to, hide the msg 
            ShowClientMsg(0, socketID, client, msg);
            //then set an alert
            $('#' + socketID).attr("style", "color: yellow;");
        }
    }
});

/***
 * 
 * Sending msg to client
 * check and show the client`s info that we chatting with
 * call a function to append our msg
 * call a function to send msg to server
 * storage of these msg done by the server in server/server.php
 * 
 ***/
//var client_ip;
//var client_id;
//when choose a client, show his/her info
$('#users').delegate('li', 'click', function () {
    client = this.innerHTML;
    data = client.split("<br>");
    //$('#name').val(data[0]);
    client_ip = data[0];
    client_id = data[1];
    $('#name').val(client_ip + '/' + client_id);
    //console.log('.message ' + client_id);
    //show the msgs with this proper client
    $('.' + client_id).siblings().hide();
    $('.' + client_id).each(function (i, ele) {
        $(this).fadeIn();
    });
    //remove the alert
    $('#' + client_id).removeAttr("style");
    //show who we`re talking to
    $('li#' + client_id).addClass("client-chosen");
    $('li#' + client_id).siblings().removeClass("client-chosen");
    //reload the chat history
    $.get("./chat_data.php?act=reload_chat_history", {ip: client_ip});
});
function ShowMyMsg(id, username, msg) {
    $('.show-area').append('<div class="' + id + '"><p class="message"><span class="label label-primary"> reply to ' + username + ' : </span>' + msg + '</p></div>');

    //$('#'+username).append('<div class="item">'+ msg +'</div>');
}
function send() {
    var to = $('#name').val();
    to = to.split("/");
    to_ip = to[0];
    to_id = to[1];
    var msg = $('#message').val();
    var data = {
        name: to_ip,
        id: to_id,
        data: msg
    };
    if (to != '' && msg != '') {
        backend.emit('reply', data);
        //console.log('msg : ' + data.data + ' sent to : ' + data.to);
        ShowMyMsg(to_id, to_ip, msg);
        $('#message').val('');
    } else if (to == '') {

    }
}
$(window).keydown(function (evt) {
    if (evt.keyCode == 13) {
        send();
    }
});
$('#btn-send').click(function (evt) {
    send();
});

backend.listen();