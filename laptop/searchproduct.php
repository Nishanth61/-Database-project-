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

<div class="container" style="margin-top:100px">
    <div class="row">
        <hr/>
        <h1>Matched Products</h1>
         <hr/>   
    </div>
    <div class="row">
        
         <?php
                    include 'config.php';

                    $name=$_GET['name'];
                    $brand=$_GET['brand'];

                    $sql = "SELECT * FROM product where name='$name' or brand='$brand'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '
                                    <div class="col-md-4" style="text-align:center:margin-bottom:20px">
                                   
                                  
                                        <img src=' . $row["pic"] . '  style="width:200px"/>   
                                        <h2>' . $row["name"] . '   </h2>
                                        
                                        <td>$' . $row["price"] . ' CAD   </td>
                                    <br/>
                                      
                                        <a href="details.php?id=' . $row["id"] . '&name=' . $row["name"] . '&price=' . $row["price"] . '&img=' . $row["pic"] . '&brand=' . $row["brand"] . '">
                                        <button class="btn btn-primary">Buy</button></a>
                                   <hr/>
                                
                                    </div>

 
                
                    ';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();


                    ?>
        
         
        
    </div>
    
</div>
</body>
</html>
