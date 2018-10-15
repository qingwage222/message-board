<?php

//include ("conn.php");
$user=$_POST['user'];
$title=$_POST['title'];
$content=$_POST['content'];
$time = time();
if ($_POST['submit']){
	$link =mysqli_connect("localhost", "root", "",'bbs') or die("不能连接");
	if($link){
    echo '连接成功';
}
	

/* mysqli_select_db( $link,"bbs");
 if(!mysqli_set_charset($link,'utf8')){
 	echo 'fail';
 }*/
  $sql="insert into message(user,title,content,lastdate) values('$user','$title','$content',now())";
    $re= mysqli_query($link,$sql);
    if(false==$re){
    	echo mysqli_errno($link).mysqli_error($link);
    }
   // echo "<script>alert('提交成功！返回首页。');location.href='add.html';</script>";
}
?>