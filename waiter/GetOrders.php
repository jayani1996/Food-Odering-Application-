<?php
    require '../db.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){ //OK
        if(isset($_GET['menuId'])){
            
            $output='';
            $sql = 'select * from menu where menuId='.$_GET['menuId'];
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    $output .= '<tr>';
                    $output .= '<td scope="row"'.$row["menuId"].'</td>';
                     $output .= '<td scope="row"'.$row["menuName"].'</td>';
                    $output .= '<td scope="row"'.$row["price"].'</td>';
                    $output .= '<td scope="row"><button type="reset">Cancel</td>';
                     $output .= '<td scope="row"><button type="submit">Oder</td>';
                     $output .= '</tr>';


                    
                }
                
                echo $output;
            }
            else{
                echo 'Data not found';
            }
        }
    }
            ?>
            