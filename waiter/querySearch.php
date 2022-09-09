<?php 
    require '../db.php';
//OK
$output='';
    $sql = "select * from menu where menuName like '%".$_GET["search"]."%' or description like '%".$_GET["search"]."%' ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            $menuId = $row["menuId"];
           // $menuName = $row["menuName"];
           // $price = $row["price"];
        $output .= '<div class="col">';
                    $output .= '<div class="card h-100" id="menuBox">';
                    $output .= '<img src='. $row["menuImg"].' class="card-img-top" alt="...">';
                    $output .= '<div class="card-body">';
                    $output .= '<h5 class="card-title" id="title">'.$row["menuName"].'</h5>';
                    $output .= '<p class="card-text" id="price">Rs. '/*.shorten($row["mainDescription"] ,100).'</p>';*/.$row["price"]. '</p>';
                    $output .= '<p class="card-text" id="description">'/*.shorten($row["mainDescription"] ,100).'</p>';*/.$row["description"]. '</p>';
                    $output .= '<a href="#" class="btn btn-outline-success getOder" data-id='.$menuId.'>Order Now</a>';                 
                    $output .= '</div>';
                    $output .= '<div class="card-footer">';
                    $output .= '<small class="text-muted">s </small>';
                    $output .= '</div>';
                    $output .= '</div>';
                    $output .= '</div>';
//
        }
        
        echo $output;
    }
    else{
        echo 'Data not found';
    }

    function shorten($string,$lenght){
        if(strlen($string)<=$lenght){
            echo $string;
        }
        else{
            $description = substr($string,0,$lenght). '...';
            echo $description;
        }
    }
    ?>