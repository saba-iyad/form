
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale">
        <link rel="php.php" href="C:\Users\user\Desktop\projact\php.php ">
        <link rel="stylesheet" href="css.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel = "stylesheet" type = "text/css" href = "style.css">   
        <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
        <meta charset="utf-8">
      
    </head>
    <body style="background-image: url('image/login.jpg'); background-repeat:no-repeat; background-size: 100% 100%; background-attachment: fixed;"  id = "frm"   class="body">

       


          <div style="background-color: #a0a0a0 ; " class="container">
           
          <br>
            <div class="p1" style="text-align: center;">
              <p class="h1">تسجيل دخول </p></div>
            <br>
            
            
            <br>
              <form name="f1" action = ""  method = "POST">  
              <label  for="uname"><b>اسم المستخدم</b></label>
              <input type="text" placeholder="ادخل البريد الالكتروني " id ="user" name  = "username" />  
              <br>
              <label for="psw"><b>كلمة المرور</b></label>
              <input type="password" placeholder="ادخل كلمة المرور "  id ="pass" name  = "password" />  
              <br>

                  
               <button type="submit" id = "btn"  name="submit" style="color:rgb(255, 255, 255);" >تسجيل الدخول </button>
    
              <br>
              
              <br>
              <form action="index.php" method="post">
               <div style="text-align: center;" >
               <button style="background-color: rgb(238, 43, 43);  color:rgb(255, 255, 255);"type="submit" class="btn btn-primary" name="forget"  />

                      نسيت كلمة المرور </>
               </div>
               </form>
       

         
    <?php
if(isset($_POST['forget'])){
  header('Location: forgotpassword.php');
}
 $link = mysqli_connect('localhost', 'root', '','registration_form');
// // Check connection

 if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
 }
if (isset($_POST['submit'])) {
    $username =$_POST['username'];
   $password =$_POST['password'];
    $sql="SELECT * FROM login WHERE username='$username'  and password='$password'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
   $count = mysqli_num_rows($result);



   if($count==1){
        
       
         echo"<script>location.replace('home.php')</script>";
        
    }
  else {
        echo"<script>alert('اسم المستخدم او كلمة السر خطأ');</script>";
     }



 }
 $link->close();
?> 
    </body>
    </html>
     
