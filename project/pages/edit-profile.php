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

include "../functions/db.php";
$result=mysql_query("SELECT * FROM tbluser WHERE user_Id='$userid'",$con);
$myrow=mysql_fetch_array($result);
?>
<html>
<head>
  <title>Мои настройки</title>
    <!--Custom CSS-->
    
    <!--Bootstrap CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-XYCjB+hFAjSbgf9yKUgbysEjaVLOXhCgATTEBpCqT1R3jvG5LGRAK5ZIyRbH5vpX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!--Script-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js"   integrity="sha256-mFypf4R+nyQVTrc8dBd0DKddGB5AedThU73sLmLWdc0="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
</head>
<body>

  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top">
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


  <div class="container">
      <div class="row">   
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Мои настройки</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <form enctype="multipart/form-data" action="update-profile.php" method="post">
                <div class="col-md-3 col-lg-3 " align="center"> 
                  <img alt="ABATAP" src="<?php echo $myrow['avatar']; ?>" style="width: 100px; height: auto;" class="center-block img-responsive img-thumbnail">
                </div>
                <div class=" col-md-9 col-lg-9 ">               
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td>Имя:</td>
                          <td>
                            <div class="form-group">
                              <INPUT TYPE="text" NAME="fname" VALUE="<?php echo $myrow['fname']; ?>" required="" class="form-control">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Фамилия:</td>
                          <td>
                            <div class="form-group">
                              <INPUT TYPE="text" NAME="lname" VALUE="<?php echo $myrow['lname']; ?>" required="" class="form-control">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Дата Рождения:</td>
                          <td>
                            <div class="form-group">
                              <input type="date" class="form-control" name="birthday" required="" VALUE="<?php echo $myrow['birthday']; ?>">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Пол:</td>
                          <td>
                            <div class="form-group">
                              <select class="form-control" name="gender" required="">
                                <option value="Мужской">Мужской</option>
                                <option value="Женский">Женский</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Город:</td>
                          <td>
                            <div class="form-group">
                              <select class="form-control" name="city" required="">
                                <option>Абай</option>
                                <option>Акколь</option>
                                <option>Аксай</option>
                                <option>Аксу</option>
                                <option>Актау</option>
                                <option>Актюбинск</option>
                                <option>Алга</option>
                                <option>Алма-Ата</option>
                                <option>Аральск</option>
                                <option>Аркалык</option>
                                <option>Арыс</option>
                                <option>Астана</option>
                                <option>Атбасар</option>
                                <option>Атырау</option>
                                <option>Аягуз</option>
                                <option>Байконур</option>
                                <option>Балхаш</option>
                                <option>Булаево</option>
                                <option>Державинск</option>
                                <option>Ерейментау</option>
                                <option>Есик</option>
                                <option>Есиль</option>
                                <option>Жанаозен</option>
                                <option>Жанатас</option>
                                <option>Жаркент</option>
                                <option>Жезказган</option>
                                <option>Жем</option>
                                <option>Жетысай</option>
                                <option>Житикара</option>
                                <option>Зайсан</option>
                                <option>Зыряновск</option>
                                <option>Казалинск</option>
                                <option>Кандыагаш</option>
                                <option>Капчагай</option>
                                <option>Караганда</option>
                                <option>Каражал</option>
                                <option>Каратау</option>
                                <option>Каркаралинск</option>
                                <option>Каскелен</option>
                                <option>Кентау</option>
                                <option>Кокшетау</option>
                                <option>Костанай</option>
                                <option>Кульсары</option>
                                <option>Курчатов</option>
                                <option>Кызылорда</option>
                                <option>Ленгер</option>
                                <option>Лисаковск</option>
                                <option>Макинск</option>
                                <option>Мамлютка</option>
                                <option>Павлодар</option>
                                <option>Петропавловск</option>
                                <option>Приозёрск</option>
                                <option>Риддер</option>
                                <option>Риддер</option>
                                <option>Сарань</option>
                                <option>Сарканд</option>
                                <option>Сарыагаш</option>
                                <option>Сатпаев</option>
                                <option>Семей</option>
                                <option>Сергеевка</option>
                                <option>Серебрянск</option>
                                <option>Степногорск</option>
                                <option>Степняк</option>
                                <option>Тайынша</option>
                                <option>Талгар</option>
                                <option>Талдыкорган</option>
                                <option>Тараз</option>
                                <option>Текели</option>
                                <option>Темир</option>
                                <option>Темиртау</option>
                                <option>Туркестан</option>
                                <option>Уральск</option>
                                <option>Усть-Каменогорск</option>
                                <option>Учарал</option>
                                <option>Уштобе</option>
                                <option>Форт-Шевченко</option>
                                <option>Хромтау</option>
                                <option>Чардара</option>
                                <option>Шалкар</option>
                                <option>Шар</option>
                                <option>Шахтинск</option>
                                <option>Шемонаиха</option>
                                <option>Шу</option>
                                <option>Шымкент</option>
                                <option>Щучинск</option>
                                <option>Экибастуз</option>
                                <option>Эмба</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td>
                            <div class="form-group">
                              <INPUT TYPE="email" NAME="email" VALUE="<?php echo $myrow['email']; ?>" required="" class="form-control">
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="form-group">
                      <label class="control-label" for="inputAbout">Обо мне:</label>
                      <textarea name="about"class="form-control" required=""><?php echo $myrow['about']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputAvatar">Аватар:</label>
                      <input type="file" class="btn btn-warning" value="" name="avatar" style="width:100%;">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-success" style="width:100%;">
                  </form>
 
                  <!--<a href="#" class="btn btn-primary">safasfawfawfc</a>-->
                </div>
              </div>
            </div>
              <div class="panel-footer">
                <a href="profile.php" data-original-title="назад" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        <!--<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>-->
                        <!--<span class="pull-right">
                            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        </span>-->
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
