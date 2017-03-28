<?php
 header("content-type:text/html;charset=utf-8");
//接值
$uname=empty($_POST['uname'])?"":'姓名：'.$_POST['uname'];
$phone=empty($_POST['phone'])?"":'联系电话：'.$_POST['phone'];
$position=empty($_POST['position'])?"":'公司职位：'.$_POST['position'];
$emotion=empty($_POST['emotion'])?"":'情感状况：'.$_POST['emotion'];
$email=empty($_POST['email'])?"":'邮箱：'.$_POST['email'];

$url="http://api.k780.com:88/?app=qr.get&data=$uname;$phone;$position;$emotion;$email&level=L&size=6";
$pdo=new PDO('mysql:host=127.0.0.1;dbname=may','root','root');
$pdo->exec('set names utf8');
$sql="insert into qr VALUES (null,'$uname','$phone','$position','$emotion','$email')";
//echo $sql;
$pdo->exec($sql);
?>
<img src="<?php echo $url?>" alt=""/>