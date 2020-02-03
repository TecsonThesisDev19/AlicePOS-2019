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

  <title>Orders</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    


</head>


<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Alice Resturant</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        
      
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
  <?php include 'navbar-admin.php';?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Orders</a>
          </li>
          <li class="breadcrumb-item active">Contents</li>
        </ol>

        <!-- DataTables Example -->
          
          
        <div class="card mb-3">
          <div class="card-header"><i class="fas fa-table"></i>Orders</div>
          <div class="card-body">
            <div class="table-responsive">
              <form method="POST">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Menu ID</th>
                    <th>Customer ID</th>
                    <th>Payment ID</th>
                    <th>Cashier ID</th>
                    <th>Table ID</th>
                    <th>Receipts ID</th>
                    <th>Sales Number</th>
                    <th>Order Quantity</th>
                    <th>Order Date</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Order ID</th>
                    <th>Menu ID</th>
                    <th>Customer ID</th>
                    <th>Payment ID</th>
                    <th>Cashier ID</th>
                    <th>Table ID</th>
                    <th>Receipts ID</th>
                    <th>Sales Number</th>
                    <th>Order Quantity</th>
                    <th>Order Date</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $sql = "SELECT * FROM `orders`";
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
                        echo '<td>'.$row['menu_ID'].'</td>';                          
                        echo '<td>'.$row['cust_ID'].'</td>';                          
                        echo '<td>'.$row['payment_ID'].'</td>';                          
                        echo '<td>'.$row['cashier_ID'].'</td>';                          
                        echo '<td>'.$row['table_ID'].'</td>';                          
                        echo '<td>'.$row['receipts_ID'].'</td>';                          
                        echo '<td>'.$row['sales_number'].'</td>';                          
                        echo '<td>'.$row['order_quantity'].'</td>';                          
                        echo '<td>'.$row['order_date_time'].'</td>';                          
                        echo '</tr>';
                      }

                    } 
                    else {
                      echo "0 results";
                    }
                  ?>
                </tbody>
              </table>
              </form>
            </div>
          </div>
    <!--      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
        </div>
         
    <!--    <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p> -->
 
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
