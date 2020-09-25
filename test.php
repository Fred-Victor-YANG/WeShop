<?php
$bIp = gethostbyname($_ENV['COMPUTERNAME']); //获取本机的局域网IP
$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
$outip = $m[1];
$inip = 0;
echo "本机IP：",$bIp,"\n";
echo "本机主机名：",gethostbyaddr($bIp),"\n\n\n"; //gethostbyaddr 函数可以根据局域网IP获取主机名
echo "intip:", $inip, "\n\n\n";
echo 'outip: ', $outip, "\n\n\n";
?>
<html>
    <head>
        
    </head>
    <body>
        <script>
            var test = <?php echo $inip; ?>
            console.log (test);
            </script>
    </body>
</html>