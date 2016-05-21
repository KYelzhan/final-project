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
<html><head>
    <style>
      body { 
      background: url(images/8.gif);
      }
    </style>
    <title>Главная страница</title>
    <!--Custom CSS-->
    
    <!--Bootstrap CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-XYCjB+hFAjSbgf9yKUgbysEjaVLOXhCgATTEBpCqT1R3jvG5LGRAK5ZIyRbH5vpX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!--Script-->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
    crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js"   integrity="sha256-mFypf4R+nyQVTrc8dBd0DKddGB5AedThU73sLmLWdc0="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>
  </head><body>
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
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8"></div>
      </div>
      
      <h4>Все категории</h4>
      <hr>
      <?php  include "../functions/db.php";

        $sel = mysql_query("SELECT * from category");
        while($row=mysql_fetch_assoc($sel)){
            extract($row);
           echo '<div class="panel panel-success">
                    <div class="panel-heading">
                    <h3 class="panel-title">'.$category.'</h3>
                    </div> 
                    <div class="panel-body">
                    <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                    <th>Название темы</th>
                    <th>Категория</th>
                    <th>Действие</th>
                    </tr>
                    </thead>';
                    $sel1 = mysql_query("SELECT * from tblpost where cat_id='$cat_id' ");
                    while($row1=mysql_fetch_assoc($sel1)){
                        extract($row1);
                        echo '<tr>';
                        echo '<td>'.$title.'</td>';
                        echo '<td>'.$category.'</td>';
                        echo '<td><a href="content.php?post_id='.$post_Id.'"><button class="btn btn-success">Подробнее</button></td>';
                        echo '</tr>';
                    }


                echo '</table>
                    </div>
                </div>';
        }
        ?>

  


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



</body></html>