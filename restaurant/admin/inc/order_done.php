<?php
include('connection.php');

if( !isset($_GET['order_id']) == 0){

  $orderId = $_GET['order_id'];
  $done = "UPDATE orders SET complete = 1 WHERE orderid = $orderId;";
  $result = mysqli_query($connection, $done);
  
  if($result){
    echo "<script>alert('Order is mark as done')</script>";
    echo "<script>window.location = '../ongoing_orders.php'</script>";
  
}
}
?>

