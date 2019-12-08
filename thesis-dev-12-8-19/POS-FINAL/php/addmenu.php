<?php
    session_start(); 
    include "../../databaseconn.php";
    $category = $_POST['cat_name'];
    $menuNum = $_POST['menu_num'];
    $menuName = $_POST['menu_name'];
    $menuPrice = $_POST['menu_price'];
  *//  $employeePosition = $_POST['employeePosition'];
 
        $sql = "INSERT INTO menu (menu_num, menu_name,menu_price,cat_name) values ('$category','$menuNum','$menuName','$menuPice')";
        $result = $conn->query($sql);
        header('Location: ../masterlist.php');

?>