<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
?>

<html>

<head>

    <title>
        Registration
    </title>
    <script src="css/bootstrap.css"></script>
</head>

<body>
    <h1>Welcome</h1>
    <?php  
    echo $_SESSION['email'];  
    ?>
    <p><a href="logout.php">Logout here</a> </p>
    <br><br>

    <form role="form" action="welcome.php" method="post">
        <input type="text" name="name" placeholder="Enter a word" required>

        <input name="display" class="btn btn-danger" type="submit" value="Search">
    </form>

    <?php  
  
include("database/db_conection.php");//make connection here  
if(isset($_POST['display']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
   
    
    $query="select user_name, comment from data where user_name='$user_name'";
    
    $run_query=mysqli_query($dbcon,$query);
    
    if(mysqli_num_rows($run_query)>0)
    {
        while($row=mysqli_fetch_array($run_query)){
            echo $row[0];
            echo ":</br></br>";
            echo $row[1];
            echo "</br></br>";
        }
    }
}  
  
?>

    <form action="welcome.php" role="form" method="post">
        <textarea type="text" name="user_comment" placeholder="Add a comment"></textarea>
        <input type="submit" name="post" value="Post">
    </form>




</body>

</html>
