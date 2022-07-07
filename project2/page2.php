<?php
session_start();
    if(isset($_POST['next'])){
      
$_SESSION['ar'][6]=$_POST['6']; 
$_SESSION['ar'][7]=$_POST['7']; 
$_SESSION['ar'][8]=$_POST['8']; 
$_SESSION['ar'][9]=$_POST['9']; 
$_SESSION['ar'][10]=$_POST['10'];
header("Location: page3.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tailwindcss.css" rel="stylesheet">
    <link href="C:\Users\user\Desktop\projact\page2.php" rel="page2.php"  >

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">  -->
   

    <title>تكنولوجيا المعلومات والاتصالات</title>

</head>
<body class="  grid justify-items-center 	bg-opacity-50  " style="background-image:url('image/p2.jpg'); background-repeat:no-repeat; background-size: 100% 100%; background-attachment: fixed;  "  >
    
    <form action="page2.php" method="post">


<div class=" space-y-6 mr-20 py-3  px-20    bg-gray-500  bg-opacity-90  border-double border-4 border-light-blue-500 rounded  border-opacity-50 	  mt-20     bg-center     shadow-lg shadow-indigo-500/50  ...">
    <p class="text-2xl w-full font-medium  py-3 ...">أهداف المقرر   </p>
    <hr>

    <label for="q1" class=" text-xl font-medium  gfield_label py-3 "  >أهداف المقرر
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea id="q1" name="6" id="input_84_26" class="textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>

    <label  for="q2" class=" text-xl font-medium  gfield_label "  >مخرجات المقرر وطرائق التعليم والتعلم والتقييم
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea id="q2" name="7" id="input_84_26" class="textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>

    <label for="q3" class=" text-xl font-medium  gfield_label "  >طرائق التعليم والتعلم
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea id="q3" name="8" id="input_84_26" class="textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>
    <label for="q4" class=" text-xl font-medium  gfield_label "  >طرائق التقييم
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea id="q4" name="9" id="input_84_26" class="textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>
    <label for="q5" class=" text-xl font-medium  gfield_label "  >طرائق التقييم
        <span class="gfield_required">
        </span>
    </label>
    <div class="ginput_container ginput_container_textarea">
        <textarea id="q5" name="10" id="input_84_26" class="textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50">

        </textarea>
        
    </div>
   
    </div>
    <div class="mb-8 mt-5   ">
            <div class=" sm:w-auto flex-none bg-gray-900 hover:bg-gray-700  text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200" href="/page2.html">
            <input type="submit" class="btn btn-primary" name="next" value="التالي " />
    
            </div> 
        
    </div>
    </form>

</body>
</html>