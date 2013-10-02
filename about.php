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
        $qsel1="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'about1'";
        
      $qsel2="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'about2'";
      
          $qsel3="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'about3'";
          
              $qsel4="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'about4'";
        
        $rs1=  mysql_query($qsel1);  
         $rs2=  mysql_query($qsel2); 
          $rs3=  mysql_query($qsel3); 
           $rs4=  mysql_query($qsel4); 
  
  while($v1=  mysql_fetch_array($rs1)) { 
    ?>
    <h3 id="about1"> <?php echo $v1['ContentText'];
        ?></h3>
    <?php
  }?>
<?php
 while($v2=  mysql_fetch_array($rs2)) {
?>
    <p id="about2"> <?php echo $v2['ContentText'];?></p>
    <?php
  }?>
<?php
 while($v3=  mysql_fetch_array($rs3)) {
?>
    <h3 id="about3"> <?php echo $v3['ContentText'];?></h3>
    <?php
  }?>
    <ul id="about4">  
<?php
 while($v4=  mysql_fetch_array($rs4)) {
?>
    <li> <?php echo $v4['ContentText'];?></li>
    <?php
  }?>
</ul>
    

</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>

<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>