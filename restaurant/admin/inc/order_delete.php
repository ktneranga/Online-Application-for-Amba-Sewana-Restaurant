<?php
include('connection.php');

if( !isset($_GET['order_id']) == 0){

  $orderId = $_GET['order_id'];
  $done = "DELETE FROM orders WHERE orderid = $orderId;";
  $result = mysqli_query($connection, $done);
  
  if($result){
    echo "<script>alert('Order is delete')</script>";
    echo "<script>window.location = '../ongoing_orders.php'</script>";
  
}
}
?>