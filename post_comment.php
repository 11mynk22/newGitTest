<?php  
require('Persistence.php');

$db = new Persistence();
$added = $db->add_comment($_POST);


include("database/db_conection.php");//make connection here  
if(isset($_POST['submit']))  
{  
    $your_name=$_POST['comment_author'];//here getting result from the post array after submitting the form.  
    $your_email=$_POST['email'];//same  
    $your_comment=$_POST['comment'];//same  

    $insert_user="insert into data (user_name,user_email,user_comment) VALUE ('$your_name','$your_email','$your_comment')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
else {
  header( 'Location: welcome.php?error=Your comment was not posted due to errors in your form submission' );
}
}
?>
