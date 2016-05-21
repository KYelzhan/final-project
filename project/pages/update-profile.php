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
    extract($_POST);

    $fname = str_replace("'","`",$fname); 
    $fname = mysql_real_escape_string($fname);
    
    $lname = str_replace("'","`",$lname); 
    $lname = mysql_real_escape_string($lname);  

    $email = str_replace("'","`",$email); 
    $email = mysql_real_escape_string($email);  

    $birthday = str_replace("'","`",$birthday); 
    $birthday = mysql_real_escape_string($birthday);
    
    $gender = str_replace("'","`",$gender); 
    $gender = mysql_real_escape_string($gender); 
            
    $city = str_replace("'","`",$city); 
    $city = mysql_real_escape_string($city); 







    $errorSubmit = false; // контейнер для ошибок

        if(isset($_FILES['avatar']) && $_FILES['avatar'] !=""){ // передали ли нам вообще файл или нет
            $whitelist = array(".gif", ".jpeg", ".png", ".jpg", ".bmp"); // список расширений, доступных для нашей аватарки
            // проверяем расширение файла 
            //===>>>
            $error = true; //флаг, отвечающий за ошибку в расширении файла
            foreach  ($whitelist as  $item) {
                if(preg_match("/$item\$/i",$_FILES['avatar']['name'])) $error = false;
            }
            //<<<===
            if($error){
                // если формат не корректный, заполняем контейнер для ошибок
                $errorSubmit = 'Не верный формат картинки!';
                echo '<script language="javascript">';
                echo 'alert("Не верный формат картинки!")';
                echo '</script>';
                echo '<meta http-equiv="refresh" content="0;url=edit-profile.php"/>';
            }else{
                // если формат корректный, то сохраняем файл
                // и все остальную информацию о пользователе
                // Файл сохранится в папку /avatars/
                move_uploaded_file($_FILES["avatar"]["tmp_name"], "../avatars/".$_FILES["avatar"]["name"]);
                $path_file = "../avatars/".$_FILES["avatar"]["name"];
                
                $sql = "UPDATE tbluser SET fname='$fname', email='$email', lname='$lname', birthday='$birthday', gender='$gender', city='$city', avatar='$path_file', about='$about' WHERE user_Id='$userid'";
                $result=mysql_query($sql);
                if($result)
                {
                    echo '<script language="javascript">';
                    echo 'alert("Данные успешно обновлены.")';
                    echo '</script>';
                    echo '<meta http-equiv="refresh" content="0;url=profile.php"/>';
                }
                else
                {
                    echo '<script language="javascript">';
                    echo 'alert("Данные не обновлены!")';
                    echo '</script>';
                    echo '<meta http-equiv="refresh" content="0;url=profile.php"/>';
                }
                 
            }
            // если картинка нам подходит сохраняем ее 
            // и все запись о пользователе
            if(!$errorSubmit){
                 
            }
        }
?>

