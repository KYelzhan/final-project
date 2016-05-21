<?php


function dbcon(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "project";

	$con = mysql_connect($host,$user,$pwd) or die ("ERROR Connecting to Database");

	$sel = mysql_select_db($db);
	mysql_query("set names 'utf8'");
}

function dbclose(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "project";

	$con = mysql_connect($host,$user,$pwd) or die ("ERROR Connecting to Database");

	$sel = mysql_select_db($db);

	mysql_close($con);
	mysql_query("set names 'utf8'");
}

function deleteuser($user_Id){
	dbcon();
	$sel = mysql_query("DELETE from tbluser where user_Id='$user_Id' ");
	mysql_query("set names 'utf8'");
	if($sel==true){
		$del = mysql_query("DELETE from tblacct where user_Id='$user_Id' ");
			echo "success";
		
	}
	else{
		echo "failed";
	}

	dbclose();
	
}

function category(){
	dbcon();
	$sel = mysql_query("SELECT * from category");
	mysql_query("set names 'utf8'");
	if($sel==true){
		while($row=mysql_fetch_assoc($sel)){
			extract($row);
			echo '<option value='.$cat_id.'>'.$category.'</option>';
		}
	}


	dbclose();
}
	
?>