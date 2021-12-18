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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Laptops/Launch_Day_Creative_21090112_1242x450_1._CB642298607_SY250_.jpg" alt="Laptop"  style="width:100%">
    </div>

    <div class="item">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Laptops/Freedom-sale/Category/Co-op/AMD__Power_Your_Reality_Amazon_1242x450._CB645459388_SY250_.jpg" style="width:100%" alt="laptop">
    </div>

    <div class="item">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Laptops/Freedom-sale/Category/Co-op/Windows-PC_Learn_1242x450_3Aug._CB645458358_SY250_.jpg" style="width:100%" alt="Laptop">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container" style="margin-bottom:50px">
    <div class="row">
        <hr/>
        <a href="search.php"><h1>Search Product</h1></a>
         <hr/>   
    </div>
    <div class="row">
        
         <?php
                    include 'config.php';


                    $sql = "SELECT * FROM product";
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
