<?php
	error_reporting(0);
	include_once("db_connect.php")
	$db = new DB_connect();
	session_start();
	if(isset($_POST('adminsubmit')))
	{
		$db->connect();
		$adminid= mysql_real_escape_string($_POST['adminid']);
		$adminpwd = mysql_real_escape_string($_POST['adminpwd']);
		//getting result
		$result=mysql_query("select * from userid where adminid='".htmlspecialchars($adminid,ENT_QUOTES)."' and adminpassword='".htmlspecialchars($adminpwd,ENT_QUOTES)."'");
	
	
	          if(mysql_num_rows($result)==1)
          	{    
				  $r=mysql_fetch_array($result);
				  if(strcmp($r['adminpassword'],htmlspecialchars($adminpwd,ENT_QUOTES))==0)
				  {
					  $_SESSION['adminid']=$r['adminid'];
					  header('Location:dashboard.php');
				  }
			 }
          	else
			  {
				  $sendstatus="* Please check username or password";
				  header("Location:adminlogin.php?status=$sendstatus");  
			  }
	}

?>