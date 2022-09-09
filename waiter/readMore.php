<?php include('db.php'); ?>
         

<?php

            
    $pID = $_GET['postID'];
    
    $query = "SELECT * from post where postId LIKE '%$pID%'  ";
    
    //$query = "SELECT * FROM itemtb";
    
    $result = mysqli_query($con ,$query);
        
    $row = mysqli_fetch_array($result);
            
    $title = $row['title'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
    $mainDescription = $row['mainDescription'];
    $image3 = $row['image3'];
    $image4 = $row['image4'];
    $subDescription = $row['subDescription'];
    $postedDateTime = $row['postedDateTime'];

   
?>
<br>
<link rel="stylesheet" type="text/css" href="style.css">
<div class=" container">
        <div id="">
            <h1 class="Title" align="center"><?php echo $title ?></h1>
        </div>
        <br>
        <br>
        <br>
        <div class="row" align="center">
            
            <?php echo '<img src=' .$image1.' height="200" width="200" class="card-img-top imageEdit" alt="...">';
           
            echo '<img src=' .$image2.' height="200" width="200" class="card-img-top imageEdit" alt="...">'; ?> 
            
        </div>
        <br>
        <p class="mainDescription" align="justify"> <?php echo $mainDescription ?></p>
        <br>
       
       <div class="row">
            <div class="col-md-6" align="center">
                <?php echo '<img src=' .$image3.' height="200" width="200" class="card-img-top imageEdit" alt="...">';
            
           echo '<img src=' .$image4.' height="200" width="200" class="card-img-top imageEdit" alt="...">'; ?>
           </div> 

    </div>
    <br>
    <p class="subDescription" align="justify"> <?php echo $subDescription ?></p>
    <div>
        <p id="dateTime"><?php echo $postedDateTime ?></p>
    </div>

</div>
