<?php 
echo "hello";
// error_reporting(0);
include_once("db_connect.php");
$db=new DB_Connect();
session_start();
if(isset($_POST['adminsubmit'])){

	$db->connect();
	$id=mysql_real_escape_string($_POST['adminid']);
	$pwd=mysql_real_escape_string($_POST['adminpwd']);
//adminid 	adminpassword
	$result=mysql_query("select 'adminid', 'adminpassword' from userid where adminid='".htmlspecialchars($id,ENT_QUOTES)."' and adminpassword='".htmlspecialchars($pwd,ENT_QUOTES)."'");
	
	
	          	if(mysql_num_rows($result)>0)
          		{    
				    $r=mysql_fetch_array($result);
					$_SESSION['adminid']=$r['adminid'];
					header('Location:../detail1.html');
			 	}
	          	else
				  {
					  $sendstatus="* Please check username or password";
					  header("Location:../index.php?status=$sendstatus");  
				  }
	}
?>