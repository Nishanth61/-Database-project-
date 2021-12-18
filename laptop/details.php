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
            <h1><?php echo $_GET['name']?> Details</h1>
            <hr/>
            <table align="center">
               <tr>
                  <td>
                     <img src="<?php echo $_GET['img']?>" style="width:300px"/>  
                  </td>
                  <td>
                     <form method="GET" action="buy.php">
                        <div class="form-group">
                           <input type="text" class="form-control" id="name" name="name"  value="<?php echo $_GET['name']?>"
                              readonly>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" id="brand" name="brand"  value="<?php echo $_GET['brand']?>"
                              readonly>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" id="price" name="price"  value="<?php echo $_GET['price']?>"
                              readonly>
                        </div>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Make Payment</button>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                           <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Payment Details</h4>
                                 </div>
                                 <div class="modal-body">
                                     <label>Name on Card</label>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Name"  
                                          >
                                    </div>
                                 
                                     <label>Card Number</label>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="cno" name="cno" placeholder="Enter Card Number"    
                                          >
                                    </div>
                                    
                                    <table>
                                        <tr>
                                            <td>
                                               <label>Month</label>
                                    <div class="form-group">
                                                   <select id="expmonth" name="expmonth">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                      <option value="6">6</option>
                                                      <option value="7">7</option>
                                                      <option value="8">8</option>
                                                      <option value="9">9</option>
                                                      <option value="10">10</option>
                                                      <option value="11">11</option>
                                                      <option value="12">12</option>
                                                    </select>
                                    </div>
                                            </td>
                                             <td>
                                                <label>Year</label>
                                    <div class="form-group">
                                                   <select id="expyear" name="expyear">
                                                      <option value="2022">2022</option>
                                                      <option value="2023">2023</option>
                                                      <option value="2024">2024</option>
                                                      <option value="2025">2025</option>
                                                      
                                                    </select>
                                    </div>
                                            </td>
                                        </tr>
                                    </table>
                                
                                     <label>Cvv</label>
                                    <div class="form-group">
                                       <input type="password" maxlength="3" class="form-control" id="cvv" name="cvv"  placeholder="Enter Cvv"   
                                          >
                                    </div>
                                 </div>
                                 
                                 <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Buy</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </body>
</html>