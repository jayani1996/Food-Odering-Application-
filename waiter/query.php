<?php
    require '../db.php';


    function getCats(){
        global $con;

        $query = "SELECT * FROM category";
        
            $result = mysqli_query($con ,$query);
            if(mysqli_num_rows($result) > 0){
            
                while($row = mysqli_fetch_array($result)){
                    $categoryID = $row['catId'];
                    $catogeryName = $row['catName'];

                    echo '
                            
                        <li class="nav-item">
                            <a class="cat nav-link" href="#" aria-current="page" data-id="'.$categoryID.'" >'.$catogeryName.'</a>
                        </li>
                    ';
                        
                }
            }
                
    }


?>