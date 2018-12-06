<?php
 if (file_exists('connectDB.php')) {
    require('./connectDB.php'); // This is line 38
}
    $tag = $_POST['tag'];
    $sql = "SELECT * FROM customer_tb WHERE id_customer";
    if($tag!=""){
      $sql.= " AND name LIKE '%$tag%'";
    }
  $result=$conn->query($sql);
  echo $result->num_rows;
  $conn->close();
?>