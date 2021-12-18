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
      <li ><a href="adminhome.php"> Laptop Store</a></li>
      <li class="active"><a href="managecustomers.php">Customers</a></li>
      <li><a href="orders.php">customer Orders</a></li>
     
     
       <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  

<div class="container">
    <div class="row">
        <h1>Customers</h1>
           
            <div class="col-sm-9">


               


                <table  style="margin-top:60px;width:100%;padding:10px" class="table-bordered">
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th>Password</th>
                           <th>Status</th>

                        <th>Action </th>
                       
                    </tr>

                    <?php
                    include 'config.php';


                    $sql = "SELECT * FROM customer";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '
                    
                                    <tr style="padding:10px">
                                    <td>' . $row["id"] . '   </td>
                                        <td>' . $row["name"] . '   </td>
                                    <td>' . $row["email"] . '   </td>
                                     <td>' . $row["phone"] . '   </td>
                                    <td>' . $row["pass"] . '   </td>
                                        <td>' . $row["status"] . '   </td>
                                    
                                    <td>   
                                    
                                             <a href="blockuser.php?id=' . $row["id"] . '"> Block </a>
                                              <a href="activeuser.php?id=' . $row["id"] . '"> Activate </a>
                                    </td>
                                
                                   
                                
                                    </tr>

                                

 
                
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
