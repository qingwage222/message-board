<?php
 $link =mysqli_connect("localhost", "root", "") or die("不能连接");
 mysqli_select_db( $link,"bbs");
 if(!mysqli_set_charset($link,'utf8')){
 	echo 'fail';
 }
// echo 'success';
 /*if(!mysqli_set_charset($link,'utf8'))
 {   
 	echo 'sucess';
 } 
 else
 	{     
 		echo 'false';
 	}  
 		mysqli_close($link);*/
?>