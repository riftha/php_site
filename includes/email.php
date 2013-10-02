
<?php
 if (empty($_POST)=== false) {
     $errors = array();
     
     $name      = $_POST['name'];
     $email     = $_POST['email'];
     $message   = $_POST['message'];
     
     if (empty($name) === true || empty($email) === true || empty($message) === TRUE){
        $errors[] = 'Name, Email and Message are required!'; 
     }
     else{
         
      if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
          $errors[] = 'That\'s not a valid email address';
      }
      if (ctype_alpha($name) === false){
          $errors[] = 'Name must only contain Letters';
      }
         
     }
     if (empty($errors)===TRUE ){
         mail('thariqmc@hotmail.com','contact form',$message , 'From: '. $email);
         header('Location: index.php?sent');
         exit();
     }
    
 }
 


?>

<!DOCTYPE html>

<html>
    
    <head>
        
    </head>
    
    <body>
        
        <?php
        
            if (isset($_GET['sent']) === TRUE){
                echo '<p>Thanks for contacting us! One of our support staff member will be in touch with you shortly</p>';
                
            } else {
        if (empty($errors) ===FALSE){
            echo '<ul>';
            foreach ($errors as $error){
                echo '<li>', $error, '</li>';
            }
            
            echo '</ul>';
        }
        
        
        
        ?>
        
        <div id="form">
        <form action="" method="post">
            
            <fieldset>
                <legend> Contact Us:</legend>
            <p>
                <label for="name">Name</label><br>
                <input type="text" placeholder="Your Name" name="name" id="name"> 
           </p>
            
            <p>
                <label for="email">Email </label> <br>
                <input type="text" placeholder="Your email address" name="email" id="email">
            </p>
            <p>
                <label for="message">Message </label>  <br>
                <textarea name="message" id="message" class='input-xlarge' rows='7'></textarea>
            </p>
            
            <p>
                <input id="buttoncolor" type="submit" value="Submit" >
                <button type="reset" id="btn">Reset</button>
            </p>
            
            
            </fieldset>
        </form>
            
            
        </div>
        <?php
            }
           
        
        ?>
    </body>
    
    
    
</html>
