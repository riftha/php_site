<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="CSS/style.css" media="screen" />


<title>Helpdesk</title>

</head>

	<body>

		<div id="wrapper">
                    
               
<?php include_once ("mysql_connect.php");?>                    

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">
    
     <?php

$qsel="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'careers1'";
        
  $rs=  mysql_query($qsel);  
  
  while($v=  mysql_fetch_array($rs)){
      
  

?>

<h4 id="careers1"><?php echo $v['ContentText'];

?></h4> 
    <?php

  }?>
    
    
    <?php

$qsel="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'careers2'";
        
  $rs=  mysql_query($qsel);  
  
  while($v=  mysql_fetch_array($rs)){
      
  

?>
    
    <p id="careers2"> <?php echo $v['ContentText'];

   ?></p>
   <?php

  }?>
    
    
    
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        
        <fieldset> 
            <legend>Please Upload your CV and Cover Letter below: </legend>
       <p>   
        <label for="name">Cover letter:</label>
        <input type='file' name='upload'id="upload"><br>
                
       </p>
        
        <p>
        <label for="name">CV:</label>
        <input type="file" name="upload"><br>
                
        </p>
        
        <p>
        <input id="buttoncolor" type="submit" name="submit" value="Submit">
            
            
        </p>
        </fieldset> 
    </form>


<?php include('upload_file.php'); ?>


</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>

<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>