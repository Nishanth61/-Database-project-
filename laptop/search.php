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
               <li class="active"><a href="home.php"> Laptop Store</a></li>
               <li><a href="myprofile.php">My Profile</a></li>
               <li><a href="myorders.php">My Orders</a></li>
               <li><a href="logout.php">Logout</a></li>
            </ul>
         </div>
      </nav>
      <div class="container">
      </div>
      <div class="container" style="margin-bottom:50px">
         <div class="row">
            <h1>Search Product</h1>
            <hr/>
            <table align="center">
               <tr>
                 
                  <td>
                     <form method="GET" action="searchproduct.php">
                         
                        <div class="form-group">
                            <label>Select Brand</label>
                          <select class="form-control" name="brand" id="brand">
                                                    <?php
                                    
                                                     include 'config.php';
                                      
                                        $sql = "SELECT * FROM product";
                                        $result = $conn->query($sql);
                        
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo '
                                            
                                          
                                          
                                            <option >' . $row["brand"] . '   </option>
                                           
                                        
                                        
                                            ';
                                            }
                                        } else {
                                            echo "No Brand found";
                                        }
                                        $conn->close();
                        
                        
                                                    
                                                    ?>
                                                </select>
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Enter laptop name</label>
                           <input type="text" class="form-control" id="name" name="name"  />
                             
                        </div>
                       
                        <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                 </div>
                     </form>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </body>
</html>