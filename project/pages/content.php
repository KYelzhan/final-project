<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>
<html>
<head>
	<title>Подробнее</title>

	<!--Custom CSS-->
	
	<!--Bootstrap CSS-->
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-XYCjB+hFAjSbgf9yKUgbysEjaVLOXhCgATTEBpCqT1R3jvG5LGRAK5ZIyRbH5vpX" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <!--Script-->
  <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
  <script   src="http://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js"   integrity="sha256-mFypf4R+nyQVTrc8dBd0DKddGB5AedThU73sLmLWdc0="   crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="home.php"></a>
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">Freelance.kz</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil-square-o"></i> Создать задание</a>
            </li>
            <li>
              <a href="members.php"><i class="fa fa-users"></i> Исполнители</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-secret"></i> <?php echo $username;?></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="profile.php"><i class="fa fa-user"></i> Мой профиль</a>
                </li>
                <li>
                  <a href="edit-profile.php"><i class="fa fa-cogs"></i> Мои настройки</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="logout.php"><i class="fa fa-sign-out "></i> Выйти</a>
                </li>
              </ul>  
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div class="container" style="margin:7% auto;">
    	<h4>Задание</h4>
    	<hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Требуется фрилансер</h3>
                </div> 
                 <div class="panel-body">
         
              
                
                            <?php

                include "../functions/db.php";
                     $id = $_GET['post_id'];
                     
                
                $sql = mysql_query("SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id='$id' ");
                if($sql==true){
                  while($row=mysql_fetch_assoc($sql)){
                    extract($row);
                    if($user_Id==009){
                       echo "<label>Название темы: </label> ".$title."<br>";
                       echo "<label>Категория: </label> ".$category."<br>";
                       echo "<label>Создано: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo "<label>Создал: </label> Admin";
                    }
                    else{
                      $sel = mysql_query("SELECT * from tbluser where user_Id='$user_Id' ");
                      while($row=mysql_fetch_assoc($sel)){
                        extract($row);
                        echo "<label>Название темы: </label> ".$title."<br>";
                       echo "<label>Категория: </label> ".$category."<br>";
                       echo "<label>Создано: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo '<label>Создал: </label>'.$fname.' '.$lname;
                       echo "<hr>";
                      }
                      
                    }
                    
         
                }
                }
                
              
                    
              ?>

              <br><label>Комментарии</label><br>
              <div id="comments">
              <?php 
              $postid= $_GET['post_id'];
              $sql = mysql_query("SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id='$postid' order by datetime");
              $num = mysql_num_rows($sql);
              if($num>0){
              while($row=mysql_fetch_assoc($sql)){
                    echo "<label>Комментарий от: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }

            }

              ?>
            </div>
              </div>
          </div>
          <hr>
            <div class="col-sm-5 col-md-5 sidebar">
          <h3>Комментарий</h3>
          <form method="POST">
            <textarea type="text" class="form-control" id="commenttxt"></textarea><br>
            <input type="hidden" id="postid" value="<?php echo $_GET['post_id']; ?>">
            <input type="hidden" id="userid" value="<?php echo $_SESSION['user_Id']; ?>">
            <input type="submit" id="save" class="btn btn-success pull-right" value="Отправить">
          </form>
        </div>
    </div>

		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <table class="table">
                          <tbody>
                          <tr>
                          <td>
                          <form method="POST" action="question-function.php">
                                  
                                   <label>Категория</label>
                                  <select name="category" class="form-control" required="">
                                      <option></option>
                                      <?php $sel = mysql_query("SELECT * from category");

                                          if($sel==true){
                                              while($row=mysql_fetch_assoc($sel)){
                                                  extract($row);
                                                  echo '<option value='.$cat_id.'>'.$category.'</option>';
                                              }
                                          }
                                      ?>
                                  </select>
                                  <label>Название темы</label>
                                  <input type="text" class="form-control" name="title" required="">
                                  <label>Опишите пожелания и детали, чтобы исполнители лучше оценили вашу задачу</label>
                                  <textarea name="content"class="form-control" placeholder="Мне нужно" required="">
                                  </textarea>
                                 <br>
                                  <input type="hidden" name="userid" value=<?php echo $userid; ?>>
                                  <input type="submit" class="btn btn-success pull-right" value="Опубликовать">
                             </form><br>
                          <hr>
                            <a href="" class="pull-right">Закрыть</a>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                      </div>
                    </div>
                  </div> 

</body>
<script>

$("#save").click(function(){
var postid = $("#postid").val();
var userid = $("#userid").val();
var comment = $("#commenttxt").val();
var datastring = 'postid=' + postid + '&userid=' + userid + '&comment=' + comment;
if(!comment){
  alert("Введите текст.");
}
else{
  $.ajax({
    type:"POST",
    url: "../functions/addcomment.php",
    data: datastring,
    cache: false,
    success: function(result){
      document.getElementById("commenttxt").value=' ';
      $("#comments").append(result);
    }
  });
}
return false;
})

</script>
</html>