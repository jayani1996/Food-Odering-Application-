<?php include('query.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ovinmo Resturanr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 

</head>
<body>
<!--Upper Navigation pane-->
<nav class="navbar justify-content-center fixed-top navbar-light bg-light">

    <div class="container ">
        <a class="navbar-brand" id="pageHeadding" align="center">Ovinmo Resturant</a>
        <form class="input-group">
            <input class="form-control me-2" id="searchWord" type="search" placeholder="Search...." aria-label="Search">
            <!--<button class="btn btn-outline-success" id="search" type="submit">Search</button>-->
        </form>
    </div>

    <!-- Lower Navigation pane-->
    <ul id="navPane" class="nav navbar-light">
       <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <!--this category list is getting by function in query.php-->
        <?php getCats(); ?>
  
        
    </ul>
</nav>


<!--seperated container.
this has a col-9 and col-3 -->

<div class="container " >
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

      <!--container begin here-->  
    <div class="row" id="content">
        
            
        <div class="col-lg-9">
        
            <!--Main cards. this is generating with-->
            <div id="mainData" class="row row-cols-1 row-cols-md-2 g-4">
            </div>

        </div>

        <div class="col-lg-3">
            <h6 class="fw-boald">Order</h6>
            <div id="recentData" class="row row-cols-1 row-cols-md-1 g-1">
                <div  >
                <div class="table-responsive">
                <table class="table" id="Order">
                  <thead>
                    <tr>
                      <th scope="col" class="invisible">#</th>
                      <th scope="col">Item</th>
                      <th scope="col">Price</th>
                      <th scope="col">Qty</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody id="allWaiters">
            <?php 
//include('GetOrders.php');
?>


          </tbody>
        </table>
      </div>

                </div>
            </div>
        </div>
    </div>

    <div id="readMore" >


    </div>

</div>



<?php 
include('footer.php');
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    
  $('#navPane').on('click','.cat', function(){ //OK
  var categoryId = $(this).data('id');
  console.log(categoryId);
        $.ajax({
        url: "http://localhost/Ovinmo/waiter/cate2.php",
        method : "GET",
        data:{categoryID:categoryId},
        dataType:"text",
        success: function (data){
            $('#mainData').html(data);
       },
     
        error: function(data){
          
        }
      });
    });

   $('#menuBox').on('click','.getOder', function(){

        var menuId = $(this).data('id');
        console.log(menuId);

        $.ajax({
        url: "http://localhost/Ovinmo/waiter/GetOrders.php.php",
        method : "GET",
        data:{menuId:menuId},
        dataType:"text",
        success: function (data){
            $('#Order').html(data);
       },
     
        error: function(data){
          
        }
            });
         
       });

</script>


<!--javascript code for navePane contacts and feedbacks -->
<script>
  //let contacts = document.querySelector('#contacts');
  let mainData = document.querySelector('#mainData');
 // let feedbacks = document.querySelector('#feedbacks');
  


 /* contacts.addEventListener('click',() => {
    mainData.innerHTML='<p>Your can contacts us on facebook, youtube, instragram.</p>';
  });

  /*feedbacks.addEventListener('click',() => {
    mainData.innerHTML='<p>fjdfd</p>';
  });*/

</script>


<!--ajax code for search box-->
<script>
$(document).ready(function(){ //OK
    $('#searchWord').keyup(function(){
        var txt = $(this).val();
        if(txt != ''){
            $.ajax({
                url:"querySearch.php",
                method:"get",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                    $('#mainData').html(data);
                }
            });
        }
        else{
            $('#mainData').html('');
            $.ajax({
                url:"querySearch.php",
                method:"get",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                    $('#mainData').html(data);
                }
            });
        }
    });
});
</script>

<!--ajax code for mainData-->
<script>
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url= "query2.php";
    var asynchronous = true;

    // ajax request
    ajax.open(method,url,asynchronous);
    ajax.send();

    //reciving data for mainData
    ajax.onreadystatechange = function(){
        if(this.readyState ==4 && this.status == 200){
            //converting json to array
            var data = JSON.parse(this.responseText);
            console.log(data); //for debug

            var html = "";
            for(var a=0; a<data.length; a++){
                var menuId = data[a].menuId;
                var menuImg = data[a].menuImg;
                var menuName = data[a].menuName;
                var description = data[a].description;
                var price  = data[a].price;
                var status = data[a].status;
                var categoryId   = data[a].categoryId ;
                

                //appending at html
                html += "<div class='col'>";
                html += "<div class='card h-100' id='carBoxes'>";
                html += "<img src="+ menuImg +" class='card-img-top' alt='...'>";
                html += "<div class='card-body'>";
                html += "<h5 class='card-title' id='title'>" + menuName + "</h5>";
                html += "<p class='card-text' id='price'>Rs. " + price +"</p>";
                html += "<p class='card-text' id='description'>" + description +"</p>";
                html += "<a href='Oder Now.php?id=" +menuId + "' class='btn btn-outline-success'>Order Now</a>";
                html += "</div>";
                html += "</div>";
                html += "</div>";
                html += "</div>";

            }
            document.getElementById("mainData").innerHTML = html;
        }
    }
    
</script>


</body>
</html> 