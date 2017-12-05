<div>
    <?php  
        include("database/db_conection.php");  
        $display_comment="select comment from data";//select query for viewing users.  
        $run=mysqli_query($dbcon,$display_comment);//here run the sql query.  
    
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            
        {  
            $comment=$row[0];  
  
        ?>
    <p>
        <?php echo $comment ?>
    </p>

    <?php } ?>
</div>
