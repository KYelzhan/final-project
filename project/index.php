<html><head>
    <style>
      body { 
      background: url(images/13.gif);
      -moz-background-size: 100%; /* Firefox 3.6+ */
      -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
      -o-background-size: 100%; /* Opera 9.6+ */
      background-size: 100%; /* Современные браузеры */ 
      }
    </style>
    <title>Freelance.kz</title>
    <!--Custom CSS-->
    
    <!--Bootstrap CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-XYCjB+hFAjSbgf9yKUgbysEjaVLOXhCgATTEBpCqT1R3jvG5LGRAK5ZIyRbH5vpX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!--Script-->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
    <script   src="http://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js"   integrity="sha256-mFypf4R+nyQVTrc8dBd0DKddGB5AedThU73sLmLWdc0="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head><body>
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
          <a class="navbar-brand" href="#">Freelance.kz</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- <ul class="nav navbar-nav navbar-left">

                    <li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>

                </ul>

            -->
          <div>
            <form class="navbar-form navbar-right" method="POST" role="search" action="pages/login.php">
              <div class="form-group">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Логин">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Пароль">
                </div>
              </div>
              <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Войти</button>
            </form>
          </div>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <form method="POST" class="form-horizontal" action="functions/register.php">
              <fieldset>
              <h3 class="text-center text-muted">Присоединяйтесь!</h3>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="fname" placeholder="Имя" class="form-control" required="">
                  </div>
                </div>  
                <div class="col-md-6">  
                  <div class="form-group">
                    <input type="text" name="lname" placeholder="Фамилия" class="form-control" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select class="form-control" name="gender" required="">
                  <option>Пол</option>
                  <option value="Мужской">Мужской</option>
                  <option value="Женский">Женский</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" placeholder="Логин" name="username" class="form-control" required="">
              </div>
              <div class="form-group">
                <input type="email" placeholder="Email" name="email" class="form-control" required="">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Пароль" name="password" class="form-control" required="">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" name="birthday" required="">
              </div>
              <div class="form-group">
                <select class="form-control" name="city" required="">
                  <option>Город</option>
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
              <div class="form-group">
                <input type="submit" value="Присоединиться" class="btn btn-success" style="width:100%;">
              </div>
              </fieldset>
            </form>
          </div>
          <div class="col-md-4 hidden-sm hidden-xs"></div>
          <div class="col-md-4">
            <div class="col-md-12">
              <h2 class="text-muted">Удобный способ заказать любую услугу</h2>
              <p class="text-muted">"Freelance.kz" - это сервис личных помощников и фрилансеров, который
                поможет найти надёжных исполнителей для решения любых бытовых задач и фриланс
                услуг. "Freelance.kz" помогает заказчикам экономить время и деньги, а
                фрилансерам находить новых клиентов и зарабатывать.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer">
      <nav align="center">
        <ul class="nav navbar-nav">
          <li>
            <a href=""></a>
          </li>
          <li>
            <a href=""></a>
          </li>
          <li>
            <a href=""></a>
          </li>
        </ul>
      </nav>
    </div>


</body></html>