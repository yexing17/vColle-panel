<?php
/*****************************
 *数据库连接
 *****************************/
@ $db = new mysqli('localhost','root','root','mysql');
if(mysqli_connect_errno()) {
    echo 'error';
    exit;
}
?>