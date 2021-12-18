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
      <li class="active"><a href="myprofile.php">My Profile</a></li>
      <li><a href="myorders.php">My Orders</a></li>
     
       <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 posts-list"></div>
                <div class="col-lg-8 posts-list">


                    <div class="comment-form">
                        <h4>My Profile </h4>
                       
                       <table class="table table-bordered table-striped">
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                                <th>Phone</th>
                               <th>Password</th>
                               <th>Update</th>
                           </tr>
                           
                           <?php
                           session_start();
                           include 'config.php';
                                
                                // Create connection
                                $conn = mysqli_connect($dbServername,$dbUsername,$dbPass,$dbName);
                                
                                $email=$_SESSION["email"];
                                $sql = "SELECT * FROM customer where email='$email'";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "<td> " . $row["name"]. " </td> <td> " . $row["email"]. " </td><td> " . $row["phone"]. "</td><td> " . $row["pass"]. "</td>
                                    
                                    
                                    <td>
                                    
                                     <a   data-toggle='modal' data-target='#" . $row['id'] . "' style='cursor:pointer'>
                                     
                                     <span class='glyphicon glyphicon-edit'></span>
                                     
                                      </a>
                                    
                                    </td>
                                    
                                    
                                    <div class='modal fade' id='" . $row["id"] . "'   role='dialog'   aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h3 class='modal-title' />Update Personal Information</h3>
                                                
                                            </div>
                                            <div class='modal-body'>
                    
                                                <form method='post' action='updateprofile.php'>
                                                
                                                 <div class='form-group'>
                                                        <label>Customer Id</label>
                
                                                <input type='text' class='form-control' name='id' value='" . $row["id"] . "' hidden readonly>
                   </div>
                
                                                    <div class='form-group'>
                                                        <label>Name</label>
                                                        <input type='text' class='form-control' name='name' value='" . $row["name"] . "' required>
                                                      
                                                    </div>

                                                     <div class='form-group'>
                                                        <label>Email</label>
                                                        <input type='text' class='form-control' name='email' value='" . $row["email"] . "' required readonly>
                                                      
                                                    </div>
                                                 
                                                    
                                                     <div class='form-group'>
                                                        <label>Phone</label>
                                                        <input type='text' class='form-control' name='phone' value='" . $row["phone"] . "' required>
                                                      
                                                    </div>
                                                    
                                                   
                                                     <div class='form-group'>
                                                        <label>Password</label>
                                                        <input type='text' class='form-control' name='pass' value='" . $row["pass"] . "' required>
                                                      
                                                    </div>
                                                   
                                                    <button class='btn btn-primary form-control'>Update </button>
                                                </form>
                    
                    
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                    
                                    ";
                                  }
                                } else {
                                  echo "Something went wrong";
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