<?php

  include_once 'includes/dbh.php';
  include 'includes/crud.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alice Restaurant</title>

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

    <!-- Navbar Search
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        
        <!--
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
   <!--
        <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>  -->

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
    <!--      <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

    <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
        
        
      <!--   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master List</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         <h6 class="dropdown-header">Menu:</h6>
          <a class="dropdown-item" href="register.html">Menu</a>
         <div class="dropdown-divider"></div>
          <h6 class="dropdown-header"> menu</h6> 
          <a class="dropdown-item" href="404.html">Transactions</a>
          <a class="dropdown-item" href="blank.html">Add ons</a>
        </div>
      </li>  -->
  <!--      
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->
       <li class="nav-item">
        <a class="nav-link" href="masterlist.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Master List</span></a>
      </li>
        
    
        
      <li class="nav-item">
        <a class="nav-link" href="orders.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Orders</span></a>
      </li>
        
             <li class="nav-item">
        <a class="nav-link" href="sales.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Sales</span></a>
      </li>
        
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Order</li>
        </ol>
          
        <div class="row mb-4">
                                <div class="col-4">
                                    <button type="button" class="btn btn-secondary btn-block">Take-out</button>      
                                </div>

                                <div class="col-4">
                                    <button type="button" class="btn btn-primary btn-block">Dine-in</button>
                                </div>

                                <div class="col-4">
                                    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">
                                        Delivery
                                    </button>
                                        
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

                                                    
                                                    <div class="col-6"> 
                                                            Customer Name: 
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="">
                                                        </div> 
                                                            
                                                    </div>

                                                    <div class="col-6"> 
                                                            Contact Number: 
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="">
                                                        </div> 
                                                    </div>

                                                    <div class="col-6"> 
                                                            Delivery Address: 
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

        <!-- Icon Cards
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div> -->

        <!-- Area Chart Example
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div> -->

        <!-- Order Table -->
    <div class= "row" style="margin-left: auto" >
        <div class = "col-6.5">
        <div class="card mb-2">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Order List (Order Number)</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                 
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>
                                    <button type="button" class="btn btn-secondary btn-block"><i class="far fa-times-circle"></i></button>      
                                </th>
                    
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
       <!--   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
            
              <div class = "row">
                                <div class="col-4">
                                    Subtotal
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
            <div class = "row">
                                <div class="col-4">
                                    Discount
                                </div>
                                <div class="col-4">
                                   <!-- <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div> 
                                    <select class="selectpicker" data-style="btn-success" style="display: none;">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
  </select>
                                </div> --> 
                        <div class="form-group">
                                <select class="form-control" id="sel1">
        <option>None</option>
        <option>Senior Citizen</option>
        <option>PWD</option>
        <option>Government</option>
      </select>
                                    
                                    
                                      <div class="md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                                    </div>
            
            
            
            
        </div>
            
             <div class = "row" >
                                <div class="col-4">
                                    Total Amount
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
            <div class = "row" >
                                <div class="col-4">
                                    Cash
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
            <div class = "row"  >
                               
                                <div class="col-4" style="margin-left: auto; margin-right: auto">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-block">Enter</button>
                                    </div>
                                </div>
                            </div>
      </div>  
    
        </div>

          
         <div class="col-6" stye="margin-right;auto">
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
          <div class="card-header">
            <i class="fas fa-table"></i>
            Beef</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Dish Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                 
                  <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Beef'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
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
         
          <div class="card-header">
            <i class="fas fa-table"></i>
            Fish</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Dish Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Fish'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?> 
                
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
  <div id="tab03" class="tab-contents">
          
          <div class="card-header">
            <i class="fas fa-table"></i>
        Chicken</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Dish Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                  <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Chicken'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
  <div id="tab04" class="tab-contents">
          
          <div class="card-header">
            <i class="fas fa-table"></i>
            Pork</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Dish Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                  <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Pork'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
  <div id="tab05" class="tab-contents">
         
          <div class="card-header">
            <i class="fas fa-table"></i>
            Salad</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Dish Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                    <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Salad'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
                    <div id="tab06" class="tab-contents">
         
          <div class="card-header">
            <i class="fas fa-table"></i>
            Soup</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Soup Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                 <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Soup'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
                    <div id="tab07" class="tab-contents">
         
          <div class="card-header">
            <i class="fas fa-table"></i>
            Dessert</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Dessert Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                 <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Dessert'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
                    <div id="tab08" class="tab-contents">
         
          <div class="card-header">
            <i class="fas fa-table"></i>
            Beverages</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                 
               <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Beverages'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
                    <div id="tab09" class="tab-contents">
         
          <div class="card-header">
            <i class="fas fa-table"></i>
            Add-ons</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
             
                <tbody>
                 
               
               <?php 
                  $sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Extras'";
    
                  //echo $sql.'<br>';       //sql query debug

                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      trigger_error('Invalid query: ' . $conn->error);
                  }

                  if ($result->num_rows > 0) {
                      // output data of each row

                      //echo $col_tags; //table and header tag included

                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        foreach ($row as $value) {
                          echo '<td>'.$value.'</td>';
                        }
                        echo '<th><button type="button" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
                        echo '</tr>';
                      }
                      //echo '</table>';
                  } else {
                      echo "0 results";
                  }
                  ?>
                 
                </tbody>
              </table>
            </div>
          </div>
  </div>
</div>
                  
 
            </div>  
          
          </div>
          
          
          
          
          
          
          
          
          
      </div>
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
