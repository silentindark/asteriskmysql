<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: ../index.php");


}else{
include '../include/loginsql.php';


$id=$_GET['id'];


$sql1="Delete from queue_table where name='$id'";
mysql_query($sql1) or die(mysql_error());

}
		
?>
