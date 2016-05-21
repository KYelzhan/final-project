<?php
  $uname=$_SESSION['uname'];
  include "../functions/db.php";

  if(isset($_GET['post_Id'])){
    $id = $_GET['post_Id'];
  }

  if(empty($id)){
    header("location:post.php");
  } 

  extract($_POST);  
  date_default_timezone_set("Asia/Almaty");
  $datetime=date("Y-m-d h:i:sa");
  
  
    $sql = "UPDATE tblpost SET title ='$title', content ='$content', category ='$category', datetime = '$datetime' WHERE post_Id ='$id'";
    $run = mysql_query($sql);
    if($run==true)
    {
      echo '<script language="javascript">';
      echo 'alert("Успешно обновлено")';
      echo '</script>';
      echo '<meta http-equiv="refresh" content="0;url=post.php"/>';
    }
    else
    {
      echo '<script language="javascript">';
      echo 'alert("Данные не обновлены!")';
      echo '</script>';
      echo '<meta http-equiv="refresh" content="0;url=post.php"/>';
    }
  
?>


