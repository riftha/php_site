<!DOCTYPE HTML>



<?php
{
if (isset($_POST['submit']))

   

if($_POST["submit"]){
    
   
    $name = $_FILES['upload'] ['name'];
    $temp = $_FILES['upload'] ['tmp_name'];
    $type = $_FILES['upload'] ['type'];
    $size = $_FILES['upload'] ['size'];
    
     
    

  
    
  if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/gif") || ($type == "application/msword")) {
      
      if ($size <=100000){
          
          move_uploaded_file ($temp,"upload/$name");
            echo "<img src='upload/$name'>";
          
         
      
          
      } else{
       
          echo "The file : $name is too big ...... <br>
                  The size is  $size and need to be less than 100kb";
  } 
  }else {
        
        echo "this type is not allowed";
    }

} } 
  



?>


