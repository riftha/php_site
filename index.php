<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="CSS/style.css" media="screen" />
<link rel="stylesheet" href="css/global.css"/>

<title>Helpdesk</title>

</head>

	<body>
                      
<div id="wrapper">

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
 
<?php include_once("mysql_connect.php")?>
                    
                                
<div id="content">
    
    
            <div id="slider">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>


	<div id="container">
		<div id="example">
			
			<div id="slides">
				<div class="slides_container">
					<div class="slide">
					
                                                <img src="img/helpdesk2.gif" width="570" height="270" alt="Slide 1"></a>
						<div class="caption" style="bottom:0">
							
						</div>
					</div>
					<div class="slide">
                                                <img src="img/helpdesk3.jpg" width="570" height="270" alt="Slide 1"></a>
						
						<div class="caption">
							<p>Taxi</p>
						</div>
					</div>
					<div class="slide">
                                                 <img src="img/helpdesk4.jpeg" width="570" height="270" alt="Slide 1"></a>
						
						<div class="caption">
							<p>Happy Bokeh raining Day</p>
						</div>
					</div>
					<div class="slide">
                                                <img src="img/helpdesk5.jpg" width="570" height="270" alt="Slide 1"></a>
						
						<div class="caption">
							<p>We Eat Light</p>
						</div>
					</div>
					<div class="slide">
                                                <img src="img/helpdesk6.jpg" width="570" height="270" alt="Slide 1"></a>
						
						<div class="caption">
							<p>&ldquo;I must go down to the sea again, to the lonely sea and the sky...&rdquo;</p>
						</div>
					</div>
					<div class="slide">
                                                <img src="img/helpdesk7.jpg" width="570" height="270" alt="Slide 1"></a>
						
						<div class="caption">
							<p>twelve.inch</p>
						</div>
					</div>
					<div class="slide">
                                                 <img src="img/helpdesk8.jpg" width="570" height="270" alt="Slide 1"></a>
						
						<div class="caption">
							<p>Save my love for loneliness</p>
						</div>
					</div>
				</div>
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
			<img src="img/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
		</div>
		
        </div>
	
            </div>

<?php

$qsel="SELECT c.ContentText
FROM content AS c
LEFT JOIN contentplaceholder AS p ON c.pagelocationid = p.PlaceHolderID
WHERE p.PlaceHolderName =  'hm1'";
        
  $rs=  mysql_query($qsel);  
  
  while($v=  mysql_fetch_array($rs)){
      
?>

<h3 id="hm1"> <?php echo $v['ContentText'];

?></h3>
<?php

  }?>

<p>
     
    
</p>


</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>

<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>