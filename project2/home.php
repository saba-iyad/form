<?php 
if(isset($_POST['next'])){
    $ar=array();
    $ar[0]=$_POST['0']; 
    $ar[1]=$_POST['1']; 
    $ar[2]=$_POST['2']; 
    $ar[3]=$_POST['3']; 
    $ar[4]=$_POST['4'];
    $ar[5]=$_POST['5'];
    
    
    session_start();
     $_SESSION['ar'] = $ar;
    header('Location: page2.php');
     
    //  echo "<script>document.location ='page2.php';</script>";
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tailwindcss.css" rel="stylesheet">
    <link href="C:\Users\user\Desktop\projact\home.php" rel="home.php"  >
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">  -->
   

    <title>تكنولوجيا المعلومات والاتصالات</title>

</head>

<body class="  grid justify-items-center 	bg-opacity-50  " style="background-image:url('image/login.jpg'); background-repeat:no-repeat; background-size: 100% 100%; background-attachment: fixed;  " >
    
    <div class="   space-y-6   bg-gray-500 border-double border-4 border-light-blue-500 rounded  border-opacity-50  mt-10   bg-opacity-80  bg-center     shadow-lg shadow-indigo-500/50  ...">
        <form action="home.php" method="post">
        <div class="pl-2 mr-20   px-20 ">
            <p class="text-xl w-full font-medium  py-3 ...">وصف المقرر الدراسي</p>
            <hr>
            <div class="px-8  py-3   ">
                <label for="q1" >  <p class="text-xl w-full font-medium ...">المؤسسة التعليمية</p></label>
            <br>
            <label  for="جامعة تكنولوجيا المعلومات والاتصالات" class="radio-inline" >
            <input id="q1" type="radio" name="جامعة تكنولوجيا المعلومات والاتصالات" value="جامعة تكنولوجيا المعلومات والاتصالات" id="male" />جامعة تكنولوجيا المعلومات والاتصالات</label>
		     </div>
            
            <div class="px-8  py-3 ">

                    <label for="q2" class=" text-xl font-medium  gfield_label" >القسم العلمي /المركز
                        <span class="gfield_required">
                         
                        </span>
                    </label>
                    <div class=" py-3 rounded  ginput_container ginput_container_select">
                        <select for="q2" name="0" id="input_84_13" class="medium gfield_select" aria-required="true" aria-invalid="false">
                            <option id="q2" value="تكنولوجيا  معلوماتية الاعمال">تكنولوجيا  معلوماتية الاعمال</option>
                            <option id="q2" value="ادارة انظمة المعلوماتية">ادارة انظمة المعلوماتية</option>
                            
                       </select>
                    </div>
                
            </div>
			<div class="px-8  py-3 ">
                <label  for="q3" class=" text-xl font-medium  gfield_label" >اسم / رمز المقرر 
                    <span class="gfield_required">
                    </span>
                    
                </label>
                <div class="   py-4 ginput_container ginput_container_text">
                    <input id="q3"   id="input_84_15" type="text" name="1" value="" class="medium max-w-md mx-auto  " aria-required="true" aria-invalid="false">
                 </div>


            </div>
			<div class="px-8  py-3 ">
                <label for="q4" class=" text-xl font-medium  gfield_label" >اشكال الحضور المتاحة
                    <span class="gfield_required">
                     
                    </span>
                    
                </label>
                <div class="   py-4 ginput_container ginput_container_text">
                    <input id="q4"  id="input_84_15" type="text" name="2" value="" class="medium" aria-required="true" aria-invalid="false">
                 </div>


            </div>
			<div class="px-8  py-3 ">
                <label for="q5" class=" text-xl font-medium  gfield_label" >الفصل / السنة  
                    <span class="gfield_required">
                     
                    </span>
                    
                </label>
                <div class="   py-4 ginput_container ginput_container_text">
                    <input id="q5" id="input_84_15" type="text" name="3" value="" class="medium" aria-required="true" aria-invalid="false">
                 </div>


            </div>
			<div class="px-8  py-3 ">
                <label for="q6" class=" text-xl font-medium  gfield_label" >عدد ساعات الدراسة (الكلي )
                    <span class="gfield_required">
                     
                    </span>
                    
                </label>
                <div class="   py-4 ginput_container ginput_container_text">
                    <input id="q6" id="input_84_15" type="text" name="4" value="" class="medium" aria-required="true" aria-invalid="false">
                 </div>


            </div>
			<div class="px-8  py-3 ">
                <label for="q7" class=" text-xl font-medium  gfield_label" >تاريخ اعداد هذا الوصف 
                    <span class="gfield_required">
                     
                    </span>
                    
                </label>
                <div class="   py-4 ginput_container ginput_container_text">
                    <input id="q7"  id="input_84_15" type="text" value="" name="5" class="medium" aria-required="true" aria-invalid="false">
                 </div>


            </div>
        </div>
        

    </div>
    <div class="mb-8 mt-5 ">
        <div class="w-full sm:w-auto flex-none bg-gray-900 hover:bg-gray-700  text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200" href="/page2.html">
        <input type="submit" class="btn btn-primary" name="next" value="التالي " />

        </div> 
       </div>
        </form>

    </div>



</body>
</html>
