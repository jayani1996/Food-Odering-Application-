<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ovinmo | Admin Pannel</title>
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <!--offcanvas Trigger-->
  <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <span class="navbar-toggler-icon" aria-controls="offcanvasExample"></span>
  </button>
  <!--offcanvas Trigger-->

  <a class="navbar-brand text-uppercase me-auto" href="#">Ovinmo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
    <form class="form-inline ms-auto">
      	<div class="input-group my-3 my-lg-0">
		<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
		<div class="input-group-append">
		    <button class="btn btn-primary" type="button">
		    	<i class="bi bi-search"></i>
		    </button>
	  	</div>
		</div>
    </form>
     <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="bi bi-person-fill"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" >
          <a class="dropdown-item" href="#">Logout</a>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!--Navbar-->

<!--offcanvas-->
<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a>


<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" style="width: 250px" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
 
  <div class="offcanvas-body p-0">
   <nav class="navbar-dark">
     <ul class="navbar-nav">
       <li>
         <a href="#" class="nav-link px-3 active" rel="dashboard">
           <span class="me-2">
             <i class="bi bi-speedometer2"></i>
           </span>
           <span>Dashboard</span>
         </a>
       </li>
       <!--li class="my-4">
         <hr class="dropdown-divider"/>
       </li-->
       <hr>
       <li>
         <a href="#" class="nav-link px-3 active" rel="category">
           <span class="me-2">
             <i class="bi bi-speedometer2"></i>
           </span>
           <span>Category</span>
         </a>
       </li>
       <!--li class="my-4">
         <hr class="dropdown-divider"/>
       </li-->
       <hr>
       <li>
         <a href="#" class="nav-link px-3 active" rel="food_items">
           <span class="me-2">
             <i class="bi bi-speedometer2"></i>
           </span>
           <span>Menu</span>
         </a>
       </li>
       <hr>
       <li>
         <a href="#" class="nav-link px-3 active" rel="orders">
           <span class="me-2">
             <i class="bi bi-speedometer2"></i>
           </span>
           <span>Orders</span>
         </a>
       </li>
       <hr>
       <a class="nav-link px-3 sidebar-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
       <span>
          <i class="bi bi-gear"></i>
       </span>
      <span class="m-2">Setting</span>
      <span class="right-icon ms-auto">
         <i class="bi bi-chevron-down"></i>
      </span>
      </a>
      <div class="collapse" id="collapseExample">
        <div>
         <ul class="navbar-nav ps-3">
           <li >
             <a href="#" class="nav-link">
              <span class="me-2">
                <i class="bi bi-layout-split"></i>
              </span>
              <span>Admin</span>
             </a>
             <a href="#" class="nav-link" rel="Waiters">
              <span class="me-2">
                <i class="bi bi-layout-split"></i>
              </span>
              <span>Waiters</span>
             </a>
           </li>
         </ul>
        </div>
      </div>
     </ul>
   </nav>
   
  </div>
</div>
<!--offcanvas-->

<!--Main Dashboard-->
<main class="mt-5 pt-3">
  <!--Dashboad content-->
<div class="container-fluid">
  <div class="row" id="dashboard">
    <div class="col-md-12">
      <div class="col-md-12 fs-3" style="font-weight: bold;">Dashboard</div>
      <div class="row">
        <div class="col-md-3">
          <!--card-->
          <div class="card text-white bg-warning  mb-4" > 
            <div class="card-body">
              <h5 class="card-title">Food Items</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-header">
              <a href="#" class="text-white" rel="food_items">View Details>></a>
            </div>
          </div>
          <!--card-->
        </div>
        <div class="col-md-3">
          <!--card-->
          <div class="card text-white bg-danger mb-4">
            <div class="card-body">
              <h5 class="card-title">Orders</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-header">
              <a href="#" class="text-white" rel="orders">View Details>></a>
            </div>
          </div>
          <!--card-->
        </div>
      </div>
    </div>
  </div>
  <!--Dashboad content-->

  <!--Category Content-->
  <div class="row my-5" id="category" style="display: none;">
        <h3 class="fs-4 mb-3">Category</h3>
        <br>
        <div>
           <button type="button" data-bs-toggle="modal" data-bs-target="#new_category" class="edit btn btn-primary">
            New  Category
            </button>
        </div>
        <br>
        <br>
        <div class="col">
          <table class="table bg-white rounded shadow-sm  table-hover">
              <thead>
                <tr>
                  <th scope="col" width="150" class="invisible">#</th>
                  <th scope="col">Category</th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
                </tr>
              </thead>
              <tbody id="allCategories">
                                
              </tbody>
          </table>
        </div>
  </div>
  <!--Category Content-->

  <!--add new category form-->
  <div class="modal fade" id="new_category" tabindex="-1" aria-labelledby="new_category" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="new_category">New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="insertNewCategory" name="newCategory">
            <div class="mb-3">
              <label for="category" class="col-form-label">Category</label>
              <input type="text" class="form-control" name="categoryName" required>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <!--add new category form-->

  <!--update category Section-->
  <div class="modal fade" id="update_category" tabindex="-1" aria-labelledby="update_category" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="update_category">Update Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateCategory" name="categoryUpdate">

          <input type="text" class="form-control" id="categoryID" name="categoryID" hidden>

            <div class="mb-3">
              <label for="categoryName" class="col-form-label">Category</label>
              <input type="text" class="form-control" id="categoryName" name="categoryName" required>
            </div>
        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  <!--end of update category-->

   <!--Display Food Items Section-->
  <div class="row my-5" id="food_items" style="display: none;">
      <h3 class="fs-4 mb-3">Menu</h3>
      <br>
      <br>
     <button class="btn-primary"><a href="#" class="text-white" rel="newFoodItem">Add New Food Item</a></button>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="invisible">#</th>
              <th scope="col">Menu</th>
              <th scope="col">Image</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
              <th scope="col">Category</th>
              <th scope="col"> </th>
              <th scope="col"> </th>
              
            </tr>
          </thead>
          <tbody id="allMenu">
            

          </tbody>
        </table>
      </div>
  </div>
  <!--Food Items Section-->

  <!--Add New Food Item-->
  <div class="row my-5 " id="newFoodItem" style="display: none;">

  <h3 class="fs-4 mb-3">New Food Item</h3>
    <div class="col bg-white">
      <form id="insertForm_Food">   
        <div class="mb-3">
          <label for="name" class="form-label">Food Name</label>
          <input type="text" class="form-control" name="menuName" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
          <label for="image1" class="col-form-label">Image </label>
          <input type="file" class="form-control" name="menuImg">
        </div>
        <div class="mb-3">
          <label for="category" class="col-form-label">Category</label>
            <select class="form-control" id="categoryList" name="categoryId" required/>
              <option value="" disable selected>Choose Category</option>
            </select>
          </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" name="price" required>
        </div>
         <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="status" value="Show" checked>Show
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="status" value="Hide">Hide
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <button class="btn btn-primary" onclick="clearFunction()" value="Reset form">Cancel</button>
        <button class="btn btn-primary">
          <a href="#" class="text-white" rel="food_items">Back</a>
        </button>
      </form>
    </div>
  </div>
  <!--End of Add New Food Item Section-->

  <!--update post starts-->
  <div class="modal fade" id="update_food" tabindex="-1" aria-labelledby="update_food" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="update_food">Update Food Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form id="update_menuForm">
          <div class="mb-3">
                    <label for="name" class="form-label">Food Name</label>
                    <input type="text" class="form-control" id="menuName" name="menuName" required>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                  <div class="mb-3">
                    <label for="image1" class="col-form-label">Image </label>
                    <input type="file" class="form-control" id="menuName" name="menuImg">
                  </div>
                  <div class="mb-3">
                    <label for="category" class="col-form-label">Category</label>
                      <select class="form-control" id="categoryList" name="categoryId" required/>
                        <option value="" disable selected>Choose Category</option>
                      </select>
                    </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>
                   <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="statusShow" name="status" value="Show" checked>Show
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="statusHide" id="menuName" name="status" value="Hide">Hide
                    </div>
                  </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  <!--end of update Food Item-->


  <!--orders Section-->
  <div class="row my-5" id="orders" style="display: none;">
      <h3 class="fs-4 mb-3">Orders</h3>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="invisible">#</th>
              <th scope="col">Menu</th>
              <th scope="col">Qty</th>
              <th scope="col">Price</th>
              <th scope="col">Payment</th>
              <th scope="col">Status</th>
              <th scope="col">Waiter</th>
              <th scope="col">Order Date</th>
            </tr>
          </thead>
          <tbody id="allOrders">
            

          </tbody>
        </table>
      </div>
  </div>
  <!--orders Section-->

  <!--Sow all waiters Section-->
  <div class="row my-5" id="Waiters" style="display: none;">
      <h3 class="fs-4 mb-3">Waiters</h3>
      <br>
      <br>
        <button class="btn btn-primary">
          <a href="#" class="text-white" rel="newWaiter">Add New</a>
        </button>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="invisible">#</th>
              <th scope="col">Name</th>
              <th scope="col">Adderess</th>
              <th scope="col">Tel.</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Edit</th>
              <th scope="col">Remove</th>
            </tr>
          </thead>
          <tbody id="allWaiters">
            

          </tbody>
        </table>
      </div>
  </div>
  <!--Sow all waiters Section-->

  <!--Add Waiters section--->
  <div class="row my-5 " id="newWaiter" style="display: none;">
  <h3 class="fs-4 mb-3">New Waiter</h3>
    <div class="col bg-white">
      <form id="insertForm_waiter">
       
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" required>
        </div>
         <div class="mb-3">
          <label for="name" class="form-label">Address</label>
          <input type="text" class="form-control" name="addresss" required>
        </div>
         <div class="mb-3">
          <label for="name" class="form-label">Phone Number</label>
          <input type="text" class="form-control" name="tel" required>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" required>
        </div>
         <div class="mb-3">
          <label for="username" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <button class="btn btn-primary" value="Reset form">Cancel</button>
         <button class="btn btn-primary">
          <a href="#" class="text-white" rel="Waiters">Back</a>
        </button>
      </form>
    </div>
  </div>
  <!--end of add waiter section-->

  <!--update waiter Section-->
  <div class="modal fade" id="update_waiter" tabindex="-1" aria-labelledby="update_waiter" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="update_waiter">Update Waiter's Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateWaiter" name="waiterUpdate">

          <input type="text" class="form-control" id="waiterId" name="waiterId" hidden>

            <div class="mb-3">
              <label for="name" class="col-form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="addresss" class="col-form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
              <label for="tel" class="col-form-label">Phone Number</label>
              <input type="text" class="form-control" id="tel" name="tel" required>
            </div>
            <div class="mb-3">
              <label for="username" class="col-form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="col-form-label">Password</label>
              <input type="text" class="form-control" id="password" name="password" required>
            </div>
        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  <!--end of update waiter-->

  </div>
</main>
<!--Main Dashboard -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--Ajax-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

  //content change
$('a').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings("div").hide();
});


/*--Insert new category--*/
$(document).ready(function(){   
    $("#insertNewCategory").submit(function(event){
        submitCategory();
        return false;
    });
});

function submitCategory(){
     $.ajax({
        type: "POST",
        url: "http://localhost/Ovinmo/admin/category.php",
        cache:false,
        data: $('form#insertNewCategory').serialize(),
        success: function(response){
            $("#newCategory").html(response)
            $('#insertNewCategory')[0].reset();  
            $("#new_category").modal('hide');

        },
        error: function(){
            alert("Error");
        }
    });
}

/*--Show categories in a table--*/
  $.ajax({    
        url: "http://localhost/Ovinmo/admin/category.php",
        method : "GET",
        dataType: 'JSON',
        cache: false,
        success: function (response){

          response.forEach(function(row){
            $('#allCategories').append('<tr>');
            $('#allCategories').append('<th scope="row" data-target="catId" class="invisible">'+row.catId+'</td>');
            $('#allCategories').append('<td data-target="catName">'+row. catName+'</td>');
            $('#allCategories').append('<td><button type="button" data-id='+row.catId+'  data-bs-toggle="modal" data-bs-target="#update_category" class="edit btn btn-primary active">Edit</button></td>');
           $('#allCategories').append('<td><a href="#" data-id='+row.catId+' class="btn btn-danger delete active">Delete</a></td> ');               
            $('#allCategories').append('</tr><br><br>');
          });
        },
        error: function(response){
          
        }
      });

  /*--append data to the category update modal--*/
  $('#allCategories').on('click','.edit', function(){

    var categoryId = $(this).data('id');
     event.preventDefault();

     $.ajax({
          url: "http://localhost/Ovinmo/admin/category.php?id="+categoryId,
          method : "GET",
          dataType: 'JSON',
          cache: false,
          success: function (response){
           console.log(response);
              $('#categoryId').val(response.catId );
              $('#categoryName').val(response.catName);
          },
       
          error: function(error){
           
       console.log(error);
             
          }
        });
     
   });

  /*--Update Category--*/
  $('#updateCategory').on("submit",function(event){

      event.preventDefault();
      var categoryId=$('#categoryID').val();
      var categoryName=$('#categoryName').val();
     
   //console.log(categoryName);
      $.ajax
      ({
          url:"http://localhost/Ovinmo/admin/category.php?id="+categoryId+"&catName="+categoryName,
          method:"PUT",
          dataType:"JSON",
           data: $('#updateCategory').serialize(),
          success: function(response)
          {
              console.log(response);
                $('#updateCategory').modal('hide');
              //  $('#changePassword')[0].reset();  

          },
          error:function(error)
          {
              console.log(error);
          }
      });
  });

  /*--Delete Category--*/
  $('#allCategories').on('click','.delete', function()
  {
    var catId = $(this).data('id');

    $.ajax({
      url:"http://localhost/Ovinmo/admin/category.php?id="+catId,
      method: "DELETE",
      dataType: "JSON",
      success:function(response)
      {
      console.log(response);
      }
    });
  });

 /*--Show all Menues in table--*/
      $.ajax({
        url: "http://localhost/Ovinmo/admin/menuItems.php",
        method: "GET",
        dataType: 'JSON',
        cache: false,
        success: function(response)
        {
          response.forEach(function(row)
          {
            $('#allMenu').append('<tr>');
            $('#allMenu').append('<th scope="row" class="invisible" data-target="menuId">'+row.menuId +'</td');
            $('#allMenu').append('<th scope="row" data-target="menuName">'+row.menuName +'</td');
           // $('#allMenu').append('<th scope="row" data-target="menuImg">'+row.menuImg +'</td');
            $('#allMenu').append('<td data-target="menuImg"><img src="../'+row.menuImg+'" height="100" width="150"</td>');
            $('#allMenu').append('<th scope="row" data-target="description">'+row.description +'</td');
            $('#allMenu').append('<th scope="row" data-target="price">'+row.price +'</td');
            $('#allMenu').append('<th scope="row" data-target=" status">'+row.status +'</td');
            $('#allMenu').append('<th scope="row" data-target="categoryId">'+row.categoryId +'</td');
            $('#allMenu').append('<td><button type="button" data-id='+row.menuId+'  data-bs-toggle="modal" data-bs-target="#update_food" class="edit btn btn-primary active">Edit</button></td>');
            $('#allMenu').append('<td><a href="#" data-id='+row.menuId+' class="btn btn-danger delete active">Delete</a></td> ');
            $('#allMenu').append('<tr>');
          });
        },
        error: function(response) {

        }
      });

       /*--Insert Food Item--*/
      $('#insertForm_Food').on("submit", function(event)
      {
        event.preventDefault();
        //var menuId = $(this).data('id');
        $.ajax({
          url:"http://localhost/Ovinmo/admin/menuItems.php?id",
          method: "POST",
          dataType: "JSON",
          data: $('#insertForm_Food').serialize(),
          success:function(response)
          {
          console.log(response);
          }
        });
      });

      //Get categort name to list box
      $.ajax({  
         url: "http://localhost/Ovinmo/admin/category.php",
        method : "GET",
        dataType: 'JSON',
        cache: false,
        success: function (response){
          //console.log(response);

          response.forEach(function(row){
              $('#categoryList').append('<option value="'+row.catId+'">'+row.catName+'</option> ');
               $('#categoryList1').append('<option value="'+row.catId+'">'+row.catName+'</option> '); 

          });
        }, 
     
        error: function(response){
          
        }
      });

   /*--append data to the food items  update modal--*/
    $('#allMenu').on('click','.edit', function(){

      var menuId = $(this).data('id');
       event.preventDefault();

       $.ajax({
            url: "http://localhost/Ovinmo/admin/menuItems.php?id="+menuId,
            method : "GET",
            dataType: 'JSON',
            cache: false,
            success: function (response){
             console.log(response);
                $('#menuId').val(response.menuId );
                $('#menuName').val(response.menuName);
                $('#menuImg').val(response.menuImg);
                $('#description').val(response.description );
                $('#price').val(response.price);
                $('#status').val(response.status );
                $('#categoryList').val(response.categoryId);
            },
         
            error: function(error){
             
         console.log(error);
               
            }
          });
       
     });

    /*--Update Food Item--*/
    $('#update_menuForm').on("submit",function(event){

        event.preventDefault();
        var menuId=$('#menuId').val();
        var menuName=$('#menuName').val();
        var menuImg=$('#menuImg').val();
        var description=$('#description').val();
        var status=$('#status').val();
        var categoryId=$('#categoryList').val();
       
     //console.log(categoryName);
        $.ajax
        ({
            url:"http://localhost/Ovinmo/admin/category.php?id="+menuId,
            method:"PUT",
            dataType:"JSON",
             data: $('#update_menuForm').serialize(),
            success: function(response)
            {
                console.log(response);
                  $('#update_menuForm').modal('hide');
                //  $('#changePassword')[0].reset();  

            },
            error:function(error)
            {
                console.log(error);
            }
        });
    });

       /*--Delete Food Item--*/
      $('#allMenu').on('click','.delete', function()
      {
        var menuId = $(this).data('id');

        $.ajax({
          url:"http://localhost/Ovinmo/admin/menuItems.php?id="+menuId,
          method: "DELETE",
          dataType: "JSON",
          success:function(response)
          {
          console.log(response);
          }
        });
      });


      /*--Show all Orders in table--*/
      $.ajax({
        url: "http://localhost/Ovinmo/admin/order.php",
        method: "GET",
        dataType: 'JSON',
        cache: false,
        success: function(response)
        {
          response.forEach(function(row)
          {
            $('#allOrders').append('<tr>');
            $('#allOrders').append('<th scope="row" data-target="orderId">'+row.orderId +'</td');
            $('#allOrders').append('<th scope="row" data-target="oderMenuId">'+row.oderMenuId +'</td');
            $('#allOrders').append('<th scope="row" data-target="qty">'+row.qty +'</td');
            $('#allOrders').append('<th scope="row" data-target="price">'+row.price +'</td');
            $('#allOrders').append('<tr>');
          });
        },
        error: function(response) {

        }
      });

    /*--Show all waiters in a table--*/
    $.ajax({    
        url: "http://localhost/Ovinmo/admin/waiter.php",
        method : "GET",
        dataType: 'JSON',
        cache: false,
        success: function (response){

          response.forEach(function(row){
            $('#allWaiters').append('<tr>');
            $('#allWaiters').append('<th scope="row" class="invisible" data-target="waiterId">'+row.waiterId+'</td>');
            $('#allWaiters').append('<td data-target="name">'+row. name+'</td>');
            $('#allWaiters').append('<td data-target="address">'+row. address+'</td>');
            $('#allWaiters').append('<td data-target=" tel">'+row.   tel+'</td>');
            $('#allWaiters').append('<td data-target="username">'+row. username+'</td>');
            $('#allWaiters').append('<td data-target="password">'+row. password+'</td>');
            $('#allWaiters').append('<td><button type="button" data-id='+row.waiterId+'  data-bs-toggle="modal" data-bs-target="#update_waiter" class="edit btn btn-primary active">Edit</button></td>');
            $('#allWaiters').append('<td><a href="#" data-id='+row.waiterId+' class="btn btn-danger delete active">Delete</a></td> ');               
            $('#allWaiters').append('</tr><br><br>');
          });
        },
        error: function(response){
          
        }
      });


    /*--Insert new waiter--*/
    $('#insertForm_waiter').on("submit", function(event)
      {
        event.preventDefault();
        //var menuId = $(this).data('id');
        $.ajax({
          url:"http://localhost/Ovinmo/admin/waiter.php?id",
          method: "POST",
          dataType: "JSON",
          data: $('#insertForm_Food').serialize(),
          success:function(response)
          {
          console.log(response);
          }
        });
    });

    /*--append data to the waiter update modal--*/
  $('#allWaiters').on('click','.edit', function(){

    var waiterId = $(this).data('id');
     event.preventDefault();

     $.ajax({
          url: "http://localhost/Ovinmo/admin/waiter.php?id="+waiterId,
          method : "GET",
          dataType: 'JSON',
          cache: false,
          success: function (response){
           console.log(response);
              $('#waiterId').val(response.waiterId );
              $('#name').val(response.name);
              $('#address').val(response.address );
              $('#tel').val(response.tel);
              $('#username').val(response.username );
              $('#password').val(response.password);
          },
       
          error: function(error){
           
       console.log(error);
             
          }
        });
     
   });

  /*--Update waiter--*/
  $('#updateWaiter').on("submit",function(event){

      event.preventDefault();
      var waiterId=$('#waiterId').val();
      var name=$('#name').val();
     
   //console.log(categoryName);
      $.ajax
      ({
          url:"http://localhost/Ovinmo/admin/waiter.php?id="+waiterId+"&name="+name,
          method:"PUT",
          dataType:"JSON",
           data: $('#updateWaiter').serialize(),
          success: function(response)
          {
              console.log(response);
                $('#updateWaiter').modal('hide');
              //  $('#changePassword')[0].reset();  

          },
          error:function(error)
          {
              console.log(error);
          }
      });
  });


  /*--delete waiter--*/
  $('#allWaiters').on('click','.delete',function(){ 
  var waiterId=$(this).data('id');
    $.ajax
    ({
    url:"http://localhost/Ovinmo/admin/waiter.php?id="+waiterId,
            method : "DELETE",
            dataType:"JSON",
            success:function(response)
            {
              console.log(response);
            }
    });
  });


/*--Update a waiter details--*/
/* $('#allWaiters').on('click', '.edit', function(event)
      {
        event.preventDefault();
        //var menuId = $(this).data('id');
        $.ajax({
          url:"http://localhost/Ovinmo/admin/waiter.php?id"+waiterId,
          method: "GET",
          dataType: "JSON",
         cache: false,
          success:function(response)
          {
            $('#waiterId').val(response.id);
            $('#name').val(response.name);
            $('#address').val(response.address);
            $('#tel').val(response.tel);
            $('#username').val(response.username);
            $('#password').val(response.password);
          },
          error: function(response)
          {
            console.log(error);
          }
        });
  });*/


</script>


</body>
</html>
