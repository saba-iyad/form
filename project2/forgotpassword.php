<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale">
        <link rel="stylesheet" href="css.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="gorgit" href="C:\Users\user\Desktop\projact\gorgit.php">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <meta charset="utf-8">
      
      
    </head>
    <body style="background-image: url('image/login.jpg');  background-repeat:no-repeat; background-size: 100% 100%; background-attachment: fixed;"   class="body">
        
          

        <br>
        <div style="background-color: #a0a0a0 ; "  class="container">
          <div class="p1" style="text-align: center;">
            <p class="h1">نسيت كلمة المرور</p></div>
              <br>
              <br>
              <br>
              <br>

          <form name="f1" action = ""  method = "POST">  
            <br>
            <br>

            <label for="email"><b>البريد الالكتروني </b></label>
            <input type="text" placeholder="ادخل البريد الالكتروني " id ="email" name="email" required>
            <br>
            <br>

            <label for="psw"><b>كلمة المرور الجديدة</b></label>
            <input type="password" placeholder=" الجديدة ادخل كلمة المرور" id="Password" name="password" required>
      
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="clearfix">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="color:rgb(255, 255, 255);">الغاء</button>
              <button type="submit" name="submit" class="signupbtn" style="color:rgb(255, 255, 255);">الذهاب لتسجيل الدخول</button>
            </div>
          </form>
          </div>
            </div>

                
    <?php

 $link = mysqli_connect('localhost', 'root', '','registration_form');
// // Check connection

 if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
 }
if (isset($_POST['submit'])) {
    $email =$_POST['email'];
   $password =$_POST['password'];
    $sql="UPDATE `login` SET `password`='$password' WHERE email='$email'";
    $result = mysqli_query($link,$sql);
    

   if($result){
        
       
         echo"<script>location.replace('index.php')</script>";
        
    }
  else {
        echo"<script>alert('اسم المستخدم او كلمة السر خطأ');</script>";
     }



 }
 $link->close();
?> 
    </body>
    </html>
  