<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laptop Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  td,th
  {
      padding:10px;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
          
          <img src="images/logo.jpeg" style="width:100%;height:30px" />
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="adminhome.php"> Laptop Store</a></li>
      <li><a href="managecustomers.php">Customers</a></li>
      <li><a href="orders.php">customer Orders</a></li>
     
     
       <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  

<div class="container">
    <div class="row">
        <h1>Products Inventory</h1>
           
            <div class="col-sm-9">


               
               
               
                <a> <button data-toggle="modal" data-target="#addproducts" class=" primary-btn" style="float:right;margin:20px;"> Add Products </button> </a>

                <!-- Modal -->
                <div class="modal fade" id="addproducts" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Add Products</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="post" action="addproduct.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Brand</label>
                                        <select class="form-control" name="brand">
                                            <option>HP</option>
                                             <option>Sony</option>
                                              <option>Dell</option>
                                               <option>Apple</option>
                                                <option>Lenova</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="price" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>

                                    

                                    <button class="btn btn-primary form-control" type="submit">Add</button>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>




                <table  style="margin-top:60px;width:100%;padding:10px" class="table-bordered">
                    <tr>
                        <th> ID </th>
                        <th> Image </th>
                        <th> Name </th>
                        <th> Brand </th>
                        <th>Price</th>

                        <th>Delete </th>
                        <th>Edit </th>
                    </tr>

                    <?php
                    include 'config.php';


                    $sql = "SELECT * FROM product";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '
                    
                                    <tr style="padding:10px">
                                    <td>' . $row["id"] . '   </td>
                                    <td><img src=' . $row["pic"] . '  style="width:50px"/>   </td>
                                    <td>' . $row["name"] . '   </td>
                                     <td>' . $row["brand"] . '   </td>
                                    <td>' . $row["price"] . '   </td>
                                    
                                    <td>   
                                    
                                             <a href="deleteproduct.php?id=' . $row["id"] . '"> Delete </a>
                                    </td>
                                
                                    <td>
                                       <a   data-toggle="modal" data-target="#' . $row["id"] . '" style="cursor:pointer"> Edit </a>
                                    </td>
                                
                                    </tr>

                                <div class="modal fade" id="' . $row["id"] . '"   role="dialog"   aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">Update Products</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                    
                                                <form method="POST" action="editproduct.php" >
                
                                                <input type="text" class="form-control" name="id" value="' . $row["id"] . '" hidden  readonly>
                
                
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value="' . $row["name"] . '" required>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label>Brand</label>
                                                       
                                                        
                                                         <select class="form-control" name="brand">
                                                            <option>HP</option>
                                                             <option>Sony</option>
                                                              <option>Dell</option>
                                                               <option>Apple</option>
                                                                <option>Lenova</option>
                                                        </select>
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label>Price</label>
                                                        <input type="text" class="form-control" name="price" value="' . $row["price"] . '"  required>
                                                    </div>
                    
                                                   
                                                    <button class="btn btn-primary form-control"  type="submit">Update Product</button>
                                                </form>
                    
                    
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>

 
                
                    ';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();


                    ?>

                </table>

            </div> 
    </div>
    
    
</div>
</body>
</html>
