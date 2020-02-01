<?php 
  include("php/db_inc.php");
  //include("../php/autogen.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alice's Restaurant</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/tab.css" rel="stylesheet" id="bootstrap-css">
  <!--  <link href="css/dropdown.css" rel="stylesheet" id="bootstrap-css"> -->

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="index.html">Alice Resturant</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
  
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
	
  <?php
	 include 'nav.php';
  ?>
  <div id="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Add Order</li>
      </ol>
      <div class="row">
        
          <div class="col-6">
            <form method="POST">
            <input type="hidden" name="frmname" value="insert"/>

            <input type="text" name="table_id" value="<?php echo isset($_POST["table_id"]) ? $_POST["table_id"] : ''; ?>"></br>
            <div class="tabs">
            <div class="tab-button-outer">
              <ul id="tab-button">
                <li><a href="#tab01"><i class="fas fa-hippo"></i></a></li>
                <li><a href="#tab02"><i class="fas fa-fish"></i></a></li>
                <li><a href="#tab03"><i class="fas fa-drumstick-bite"></i></a></li>
                <li><a href="#tab04"><i class="fas fa-bacon"></i></a></li>
                <li><a href="#tab05"><i class="fas fa-carrot"></i></a></li>
                  <li><a href="#tab06"><i class="fab fa-hotjar"></i></a></li>
                <li><a href="#tab07"><i class="fas fa-cheese"></i></a></li>
                <li><a href="#tab08"><i class="fab fa-gulp"></i></a></li>
                <li><a href="#tab09"><i class="fab fa-medrt"></i></a></li>
              </ul>
            </div>
            <div class="tab-select-outer">
              <select id="tab-select">
                <li><a href="#tab01"><i class="fas fa-hippo"></i></a></li>
                <li><a href="#tab02"><i class="fas fa-fish"></i></a></li>
                <li><a href="#tab03"><i class="fas fa-drumstick-bite"></i></a></li>
                <li><a href="#tab04"><i class="fas fa-bacon"></i></a></li>
                <li><a href="#tab05"><i class="fas fa-carrot"></i></a></li>
                  <li><a href="#tab06"><i class="fab fa-hotjar"></i></a></li>
                <li><a href="#tab07"><i class="fas fa-cheese"></i></a></li>
                <li><a href="#tab08"><i class="fab fa-gulp"></i></a></li>
                <li><a href="#tab09"><i class="fab fa-medrt"></i></a></li>
              </select>
            </div>
            <div id="tab01" class="tab-contents">
                <div class="col-6.5">
                    <div class="card-header"><i class="fas fa-table"></i>Beef</div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Dish Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php 
                              $sql = "SELECT * FROM menu WHERE `menu_description` = 'Beef'";
                              $result = $conn->query($sql);

                              if (!$result) {
                                trigger_error('Invalid query: ' . $conn->error);
                              }

                              if ($result->num_rows > 0) {
                                // output data of each row

                                //echo $col_tags; //table and header tag included

                                while($row = $result->fetch_assoc()) {
                                  echo '<tr>';
                                  //echo '<td>'.$row['menu_ID'].'</td>';
                                  echo '<td>'.$row['menu_name'].'</td>';
                                  //echo '<td>'.$row['menu_description'].'</td>';
                                  echo '<td>'.$row['menu_price'].'</td>';
                                  echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                  echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                  echo '</tr>';
                                }

                              } 
                              else {
                                echo "0 results";
                              }
                            ?>
                          </tbody>
                        </table>                        
                      </div>
                    </div>
               </div>
            </div>
            <div id="tab02" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Fish</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Dish Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php 
                              $sql = "SELECT * FROM menu WHERE `menu_description` = 'Fish'";
                              $result = $conn->query($sql);

                              if (!$result) {
                                trigger_error('Invalid query: ' . $conn->error);
                              }

                              if ($result->num_rows > 0) {
                                // output data of each row

                                //echo $col_tags; //table and header tag included

                                while($row = $result->fetch_assoc()) {
                                  echo '<tr>';
                                  //echo '<td>'.$row['menu_ID'].'</td>';
                                  echo '<td>'.$row['menu_name'].'</td>';
                                  //echo '<td>'.$row['menu_description'].'</td>';
                                  echo '<td>'.$row['menu_price'].'</td>';
                                  echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                  echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                  echo '</tr>';
                                }

                              } 
                              else {
                                echo "0 results";
                              }
                            ?>
                          </tbody>
                        </table>
                  </div>
                </div>
            </div>  
            <div id="tab03" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Chicken</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Dish Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php 
                              $sql = "SELECT * FROM menu WHERE `menu_description` = 'Chicken'";
                              $result = $conn->query($sql);

                              if (!$result) {
                                trigger_error('Invalid query: ' . $conn->error);
                              }

                              if ($result->num_rows > 0) {
                                // output data of each row

                                //echo $col_tags; //table and header tag included

                                while($row = $result->fetch_assoc()) {
                                  echo '<tr>';
                                  //echo '<td>'.$row['menu_ID'].'</td>';
                                  echo '<td>'.$row['menu_name'].'</td>';
                                  //echo '<td>'.$row['menu_description'].'</td>';
                                  echo '<td>'.$row['menu_price'].'</td>';
                                  echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                  echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                  echo '</tr>';
                                }

                              } 
                              else {
                                echo "0 results";
                              }
                            ?>
                          </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <div id="tab04" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Pork</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Dish Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                          $sql = "SELECT * FROM menu WHERE `menu_description` = 'Pork'";
                          $result = $conn->query($sql);

                          if (!$result) {
                            trigger_error('Invalid query: ' . $conn->error);
                          }

                          if ($result->num_rows > 0) {
                            // output data of each row

                            //echo $col_tags; //table and header tag included

                            while($row = $result->fetch_assoc()) {
                              echo '<tr>';
                              //echo '<td>'.$row['menu_ID'].'</td>';
                              echo '<td>'.$row['menu_name'].'</td>';
                              //echo '<td>'.$row['menu_description'].'</td>';
                              echo '<td>'.$row['menu_price'].'</td>';
                              echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                              echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                              echo '</tr>';
                            }

                          } 
                          else {
                            echo "0 results";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <div id="tab05" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Salad</div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Dish Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php 
                              $sql = "SELECT * FROM menu WHERE `menu_description` = 'Salad'";
                              $result = $conn->query($sql);

                              if (!$result) {
                                trigger_error('Invalid query: ' . $conn->error);
                              }

                              if ($result->num_rows > 0) {
                                // output data of each row

                                //echo $col_tags; //table and header tag included

                                while($row = $result->fetch_assoc()) {
                                  echo '<tr>';
                                  //echo '<td>'.$row['menu_ID'].'</td>';
                                  echo '<td>'.$row['menu_name'].'</td>';
                                  //echo '<td>'.$row['menu_description'].'</td>';
                                  echo '<td>'.$row['menu_price'].'</td>';
                                  echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                  echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                  echo '</tr>';
                                }

                              } 
                              else {
                                echo "0 results";
                              }
                            ?>
                          </tbody>
                        </table>
                  </div>
                </div>
            </div>
            <div id="tab06" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Soup</div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Dish Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                            $sql = "SELECT * FROM menu WHERE `menu_description` = 'Soup'";
                            $result = $conn->query($sql);

                            if (!$result) {
                              trigger_error('Invalid query: ' . $conn->error);
                            }

                            if ($result->num_rows > 0) {
                              // output data of each row

                              //echo $col_tags; //table and header tag included

                              while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                //echo '<td>'.$row['menu_ID'].'</td>';
                                echo '<td>'.$row['menu_name'].'</td>';
                                //echo '<td>'.$row['menu_description'].'</td>';
                                echo '<td>'.$row['menu_price'].'</td>';
                                echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                echo '</tr>';
                              }

                            } 
                            else {
                            echo "0 results";
                            }
                          ?>
                        </tbody>
                      </table>                    
                  </div>
                </div>
            </div>
            <div id="tab07" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Dessert</div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Dish Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                            $sql = "SELECT * FROM menu WHERE `menu_description` = 'Dessert'";
                            $result = $conn->query($sql);

                            if (!$result) {
                              trigger_error('Invalid query: ' . $conn->error);
                            }

                            if ($result->num_rows > 0) {
                              // output data of each row

                              //echo $col_tags; //table and header tag included

                              while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                //echo '<td>'.$row['menu_ID'].'</td>';
                                echo '<td>'.$row['menu_name'].'</td>';
                                //echo '<td>'.$row['menu_description'].'</td>';
                                echo '<td>'.$row['menu_price'].'</td>';
                                echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                echo '</tr>';
                              }

                            } 
                            else {
                              echo "0 results";
                            }
                          ?>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
            <div id="tab08" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Beverages</div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Dish Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                            $sql = "SELECT * FROM menu WHERE `menu_description` = 'Beverages'";
                            $result = $conn->query($sql);

                            if (!$result) {
                              trigger_error('Invalid query: ' . $conn->error);
                            }

                            if ($result->num_rows > 0) {
                              // output data of each row

                              //echo $col_tags; //table and header tag included

                              while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                //echo '<td>'.$row['menu_ID'].'</td>';
                                echo '<td>'.$row['menu_name'].'</td>';
                                //echo '<td>'.$row['menu_description'].'</td>';
                                echo '<td>'.$row['menu_price'].'</td>';
                                echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                echo '</tr>';
                              }

                            } 
                            else {
                              echo "0 results";
                            }
                          ?>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
            <div id="tab09" class="tab-contents">  
              <div class="card-header"><i class="fas fa-table"></i>Extras</div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Dish Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                            $sql = "SELECT * FROM menu WHERE `menu_description` = 'Extras'";
                            $result = $conn->query($sql);

                            if (!$result) {
                              trigger_error('Invalid query: ' . $conn->error);
                            }

                            if ($result->num_rows > 0) {
                              // output data of each row

                              //echo $col_tags; //table and header tag included

                              while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                //echo '<td>'.$row['menu_ID'].'</td>';
                                echo '<td>'.$row['menu_name'].'</td>';
                                //echo '<td>'.$row['menu_description'].'</td>';
                                echo '<td>'.$row['menu_price'].'</td>';
                                echo '<td><input type="text" name="quantity'.$row['menu_ID'].'"></td>';
                                echo '<td><button type="submit" name=add value="'.$row['menu_ID'].'">add</button></td>';

                                echo '</tr>';
                              }

                            } 
                            else {
                              echo "0 results";
                            }
                          ?>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>

            </form>
          </div>     
        </div>
        
        
        
        <!-- Order Table -->    
        <div class= "col-6" style="margin-right: auto" >
          <div class="card mb-2">
            <div class="card-header"><i class="fas fa-table"></i>Order List (Order Number)</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ORDER ID</th>
                      <th>MENU ID</th>
                      <!-- <th>CUST ID</th> -->
                      <!-- <th>PAYMENT ID</th> -->
                      <!-- <th>CASHIER ID</th> -->
                      <th>TABLE ID</th>
                      <!-- <th>RECEIPTS ID</th> -->
                      <!-- <th>SALES NUMBER</th> -->
                      <th>QUANTITY</th>
                      <th>DATE TIME</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $tableRef = $_POST['table_id'];
                        //$sql = "SELECT * FROM `orders` WHERE `table_ID` = '$tableRef' LEFT JOIN `menu` ON orders.menu_ID = menu.menu_ID";
                        $sql = "SELECT * FROM `orders` LEFT JOIN `menu` ON orders.menu_ID = menu.menu_ID WHERE `table_ID` = '$tableRef'";
                        //$sql = "SELECT * FROM `orders`";
                        
                        $result = $conn->query($sql);
                          if (!$result) {
                            trigger_error('Invalid query: ' . $conn->error);
                          }

                          if ($result->num_rows > 0) {
                            // output data of each row
                            //echo $col_tags; //table and header tag included
                            while($row = $result->fetch_assoc()) {
                              echo '<tr>';
                                echo '<td>'.$row['order_ID'].'</td>';
                                //echo '<td>'.$row['menu_ID'].'</td>';
                                echo '<td>'.$row['menu_name'].'</td>';                                
                                //echo '<td>'.$row['cust_ID'].'</td>';
                                //echo '<td>'.$row['payment_ID'].'</td>';
                                //echo '<td>'.$row['cashier_ID'].'</td>';
                                echo '<td>'.$row['table_ID'].'</td>';
                                //echo '<td>'.$row['receipts_ID'].'</td>';
                                //echo '<td>'.$row['sales_number'].'</td>';
                                echo '<td>'.$row['order_quantity'].'</td>';
                                echo '<td>'.$row['order_date_time'].'</td>';
                              echo '</tr>';
                            }
                          } 
                          else {
                            echo "0 results";
                          }
                        }                            
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class = "row">
              <div class="col-4">Subtotal</div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="subtotal" disabled>
                </div>
              </div>
            </div>
            <div class = "row">
              <div class="col-4">Discount</div>
                <div class="col-4">              
                  <div class="form-group">
                    <select class="form-control" id="sel1">
                      <option>None</option>
                      <option>Senior Citizen</option>
                      <option>PWD</option>
                      <option>Government</option>
                    </select>
                    <div class="md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" id="discount" disabled>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class = "row" >
              <div class="col-4">Total Amount</div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="totalamount" disabled>
                </div>
              </div>
            </div>
            <div class = "row" >
              <div class="col-4">Cash</div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="cashin">
                </div>
              </div>
            </div>
            <!--Place Order-->
            <form method="POST" action="checkout.php">
              <button type="submit" name="checkout">Checkout</button>
            </form>
            <div class = "row">
              <div class="col-4" style="margin-left:auto ; margin-right:auto">
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#placeorder">Place Order</button>
                <div class="modal fade" id="placeorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row"> 
                          <div class="col-6">Order ID:</div>
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="" >
                            </div> 
                          </div>
                          <div class="col-6">Table Number:</div>
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="" >
                            </div> 
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Price</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-6">Total Amount: </div>
                        <div class="col-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="" disabled>
                          </div> 
                        </div>
                        <div class="col-6">Cash:</div>
                        <div class="col-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="" disabled>
                          </div> 
                        </div>
                        <div class="col-6">Change: </div>
                        <div class="col-6">
                          <div class="form-group"><input type="text" class="form-control" id="" disabled></div> 
                        </div>
                        <!--   <div class="col-6">
                        <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div> 
                        </div> -->
                        </div>          
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" href="orders.php">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
      <div class="row mb-4">
        <div class="col-4">
          <button type="button" class="btn btn-secondary btn-block">Take-out</button>
        </div>
        <div class="col-4">
          <button type="button" class="btn btn-primary btn-block">Dine-in</button>
        </div>
        <div class="col-4">
          <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Delivery</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delivery Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-6"> Customer Name:</div>
                      <div class="col-6">
                        <div class="form-group"><input type="text" class="form-control" id="">
                        </div> 
                      </div>
                    <div class="col-6">Contact Number:</div>
                    <div class="col-6">
                      <div class="form-group"><input type="text" class="form-control" id=""></div> 
                    </div>
                      <div class="col-6">Delivery Address:</div>
                        <div class="col-6">
                            <div class="form-group">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
                              </textarea>
                            </div> 
                        </div>
                      </div>          
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <?php 
    if(isset($_POST['frmname'])){
      $filename = $_POST['frmname'];
    }
    if(isset($filename)){ 
      if ($_SERVER['REQUEST_METHOD'] == 'POST' and $_POST['frmname']=='insert') {
      $timezone = date_default_timezone_get();
      $date = date('Y-m-d h:i:s', time());

      $menu_ID =$_POST['add'];
      //$cust_ID =$_POST['cust_id'];
      //$payment_ID = $_POST['payment_id'];
      //$cashier_ID = $_POST['cashier_id'];
      $table_ID = $_POST['table_id'];
      //$receipts_ID = $_POST['receipts_id'];
      $quantity_ID = $_POST['quantity'.$_POST['add']];
      $qNum = (int)$quantity_ID;
      //How to identify sales number
      //how to identify current datetiem

      
        //$sql = "INSERT INTO `orders`( `menu_ID`, `cust_ID`, `payment_ID`, `cashier_ID`, `table_ID`, `receipts_ID`,`order_quantity`) VALUES ('$menu_ID','$cust_ID','$payment_ID','$cashier_ID','$table_ID','$receipts_ID','$qNum');";

        $sql = "INSERT INTO `orders`( `menu_ID`, `order_quantity`, `table_ID`,`order_date_time`) VALUES ('$menu_ID','$qNum','$table_ID','$date');";

        //echo $sql.'<br>';       //sql query debug
        //echo $quantity_ID.'<br>';

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully"; 

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    }
    
    ?>    
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/tab.js"></script>
</body>

</html>
