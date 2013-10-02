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
                    
<?php include_once("mysql_connect.php")?>

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">
    
    <?php

$qsel="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'tutorial1'";
        
  $rs=  mysql_query($qsel);  
  
  while($v=  mysql_fetch_array($rs)){
      
  

?>


<h3 id="tutorial1"> <?php echo $v['ContentText'];

?></h3>
    
    <?php

  }?>

<a href="http://www.youtube.com/watch?v=-ET8wnasqj4" target="_blank"> Microsoft Lync 2010 -- What's Lync?</a> <br>
<a href="http://www.youtube.com/watch?v=d7nASPfL-20&list=PLGDd15TZUlyT3jDIYE5XdOHYHgnahyr5E" target="_blank"> Microsoft Lync all in one Tutorial</a> <br>
<a href="http://www.youtube.com/watch?v=GKv8gGb30oI" target="blank" > Making a call</a> <br>
<a href="http://www.youtube.com/watch?v=AXzHUECtFcM" target="blank" > Adding a Contact</a> <br> 
<a href="http://www.youtube.com/watch?v=Hw7j1TCrSaU" target="blank" > Change Status</a> <br>
<a href="http://www.youtube.com/watch?v=TgHBM8k6hb8" target="blank" > Missed conversations</a>

<?php

$qsel="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'win8'";
        
  $rs=  mysql_query($qsel);  
  
  while($v=  mysql_fetch_array($rs)){
      
  

?>

<h3 id="win8"><?php echo $v['ContentText'];



?> </h3>

<?php

  }?>
<a href="http://www.acer.com/windows8-tutorial/template.html" target="blank"> Windows 8 Tutorial </a>


<?php

$qsel="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'office'";
        
  $rs=  mysql_query($qsel);  
  
  while($v=  mysql_fetch_array($rs)){
      
  

?>


<h3 id='office'><?php echo $v['ContentText'];



?> </h3>
<?php

  }?>
<a href="http://www.youtube.com/watch?v=2avB8on_tgM" target="blank"> Microsoft Office 365 Introduction </a> <br>
<a href="http://www.youtube.com/watch?v=D6O9J_EzmqE" target="blank"> SkyDrive </a>

</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>

<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>