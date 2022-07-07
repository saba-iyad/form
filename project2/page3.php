<?php 
if(isset($_POST['next'])){
      
    header("Location: page4.php");
    
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tailwindcss.css" rel="stylesheet">
    <link href="C:\Users\user\Desktop\projact\page3.php" rel="page3.php"  >

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">  -->
   

    <title>تكنولوجيا المعلومات والاتصالات</title>

</head>
<body class="  grid justify-items-center 	bg-opacity-50  " style="background-image:url('image/p3.jpg'); background-repeat:no-repeat; background-size: 100% 100%; background-attachment: fixed;  "  >
    
    <div class=" space-y-6  py-3  px-20    bg-gray-500  bg-opacity-90  border-double border-4 border-light-blue-500 rounded  border-opacity-25 	  mt-20    bg-center     shadow-lg shadow-indigo-500/50  ...">
        <p class="text-2xl w-full font-medium  py-3 ...">البنية التحتية    </p>
        <hr>

     <div class=" space-y-6 py-8 ginput_container ginput_container_list ginput_list">
        <table class="py-3  gfield_list gfield_list_container">
        <form action="page3.php" method="post">
            <colgroup >
                <col id="gfield_list_90_col_1" class="gfield_list_col_odd">
                <col id="gfield_list_90_col_2" class="gfield_list_col_even">
                <col id="gfield_list_90_col_3" class="gfield_list_col_odd">
                <col id="gfield_list_90_col_4" class="gfield_list_col_even">
                <col id="gfield_list_90_col_5" class="gfield_list_col_odd">
                <col id="gfield_list_90_col_6" class="gfield_list_col_even">
                <col id="gfield_list_90_col_7" class="gfield_list_col_odd">
            </colgroup>
            <thead >
                <tr class="py-3 ">
                    <th scope="col">الاسبوع</th>
                    <th scope="col">الساعات</th>
                    <th scope="col">مخرجات التعلم المطلوبة</th>
                    <th scope="col">اسم الوحدة او /الموضوع</th>
                    <th scope="col">طرق التعليم</th>
                    <th scope="col">طرق التقييم</th>
                    <td>&nbsp;</td>
                </tr>
            </thead>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
            <tbody>
                <tr class="gfield_list_row_odd gfield_list_group">
                    <td class="gfield_list_cell gfield_list_90_cell1" data-label="الاسبوع">
                        <input aria-invalid="false" aria-required="true" aria-label="الاسبوع, Row " data-aria-label-template="الاسبوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell2" data-label="الساعات">
                        <input aria-invalid="false" aria-required="true" aria-label="الساعات, Row " data-aria-label-template="الساعات, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell3" data-label="مخرجات التعلم المطلوبة">
                        <input aria-invalid="false" aria-required="true" aria-label="مخرجات التعلم المطلوبة, Row " data-aria-label-template="مخرجات التعلم المطلوبة, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell4" data-label="اسم الوحدة او /الموضوع">
                        <input aria-invalid="false" aria-required="true" aria-label="اسم الوحدة او /الموضوع, Row " data-aria-label-template="اسم الوحدة او /الموضوع, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell5" data-label="طرق التعليم">
                        <input aria-invalid="false" aria-required="true" aria-label="طرق التعليم, Row " data-aria-label-template="طرق التعليم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    <td class="gfield_list_cell gfield_list_90_cell6" data-label="طرق التقييم"><input aria-invalid="false" aria-required="true" aria-label="طرق التقييم, Row " data-aria-label-template="طرق التقييم, Row {0}" type="text" name="input_90[]" value="">
                    </td>
                    
                </tr>
            </tbody>
         </table>
       </div>
    </div>
    <div class="mb-8 mt-5 ">
    <div class=" sm:w-auto flex-none bg-gray-900 hover:bg-gray-700  text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">
        <input type="submit" class="btn btn-primary" name="next" value="التالي " />
    </div>
    </form>
    </div>
</body>
</html>