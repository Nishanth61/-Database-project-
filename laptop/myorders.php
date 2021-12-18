<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laptop Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
       <li ><a href="home.php"> Laptop Store</a></li>
      <li ><a href="myprofile.php">My Profile</a></li>
      <li class="active"><a href="myorders.php">My Orders</a></li>
     
       <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 posts-list"></div>
                <div class="col-lg-8 posts-list">


                    <div class="comment-form">
                        <h4>My Orders </h4>
                       
                       <table class="table table-bordered table-striped">
                           <tr>
                               <th>Order Id</th>
                               <th>Name</th>
                                <th>Brand</th>
                               <th>Price</th>
                               <th>Status</th>
                           </tr>
                           
                           <?php
                           session_start();
                           include 'config.php';
                                
                                // Create connection
                                $conn = mysqli_connect($dbServername,$dbUsername,$dbPass,$dbName);
                                
                                $email=$_SESSION["email"];
                                $sql = "SELECT * FROM orders where email='$email'";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "<tr><td> " . $row["oid"]. " </td> <td> " . $row["name"]. " </td><td> " . $row["brand"]. "</td><td> " . $row["price"]. "</td>
                                    
                                    <td> " . $row["status"]. "</td>
                                    
                                    </tr>
                                    
                                    ";
                                  }
                                } else {
                                  echo "No Orders Found";
                                }
                                
                                mysqli_close($conn);
                            
                           
                           ?>
                           
                           
                           
                           
                       </table>
                       
                       
                    </div>
                </div>
                <div class="col-lg-2 posts-list"></div>

            </div>
        </div>

    <!-- End post-content Area -->

   
</body>

</html>