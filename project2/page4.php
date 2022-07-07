<?php

$link = mysqli_connect('localhost', 'root', '','registration_form');
// // Check connection

 if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
 }

session_start();
    if(isset($_POST['send'])){

$_SESSION['ar'][11]=$_POST['11']; 
$_SESSION['ar'][12]=$_POST['12']; 
$_SESSION['ar'][13]=$_POST['13']; 
$_SESSION['ar'][14]=$_POST['14']; 
$_SESSION['ar'][15]=$_POST['15'];
$array=$_SESSION['ar'];

//هاي المصفوفه الي تضيفينها للداتا بيس

$sql="INSERT INTO `form`( `scientific-department`, `Course_Name`, `forms_attendance`, `year`, `Study_hours`, `Date`, `Course_objectives`, `Course_Outcomes`, `Teaching_learning_methods`,
 `Evaluation_methods1`, `Evaluation_methods2`, `bookreq`, `referncesmain`, `bookandrefe`, `referncesnet`, `planedev`) VALUES ('$array[0]','$array[1]'
 ,'$array[2]','$array[3]','$array[4]','$array[5]','$array[6]',
 '$array[7]','$array[8]','$array[9]','$array[10]','$array[11]','$array[12]','$array[13]','$array[14]','$array[15]')";

$result = mysqli_query($link,$sql);
    

if($result){
     
    
    echo"<script>location.replace('finalpage.php')</script>";
     
 }}
//هاي المصفوفه الي تضيفينها للداتا بيس

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tailwindcss.css" rel="stylesheet">
    <link href="C:\Users\user\Desktop\projact\page4.php" rel="page4.php"  >

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">  -->
   

    <title>تكنولوجيا المعلومات والاتصالات</title>

</head>
<body class="  grid justify-items-center 	bg-opacity-50  " style="background-image:url('image/pp.jpg'); background-repeat:no-repeat; background-size: 100% 100%; background-attachment: fixed;  "  >
    
    

<div class=" space-y-6 mr-20 py-3  px-20   bg-gray-500  bg-opacity-90  border-double border-4 border-light-blue-500 rounded  border-opacity-50 	  mt-20     bg-center     shadow-lg shadow-indigo-500/50  ...">
    <p class="text-2xl w-full font-medium  py-3 ...">البنية التحتية    </p>
     <hr>
     <form action="page4.php" method="post">

    <label class=" text-xl font-medium  gfield_label "  >الكتب المقررة المطلوبة

        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea name="11" id="input_84_26" class=" p-8  w-full  textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>

    <label class=" text-xl font-medium  gfield_label py-3 "  >المراجع الرئيسية (المصادر)
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea name="12" id="input_84_26" class="  p-8 w-full textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>

    <label class=" text-xl font-medium  gfield_label  py-3 "  >الكتب والمراجع التي يوصى بها (المجلات العلمية ،التقارير ،.....)
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea name="13" id="input_84_26" class="p-8 w-full  textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>
    <label class=" text-xl font-medium  gfield_label py-3 "  >..... ،المراجع الالكترونية ،مواقع الانترنيت
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea name="14" id="input_84_26" class="p-8 w-full  textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>
    <div class="my-8">    <label class=" text-xl font-medium  gfield_label  "  >خطة تطوير المقرر الدراسي
    </div>
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea name="15" id="input_84_26" class=" p-8 w-full textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>
    
    </div>
 <div class="mb-8 mt-5 ">
 <div class=" sm:w-auto flex-none bg-gray-900 hover:bg-gray-700  text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">
        <input type="submit" class="btn btn-primary" name="send" value="ارسال " />
   </div>
 </div>
</form>
</body>
</html>
