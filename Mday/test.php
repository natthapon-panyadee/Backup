
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
   // $query = "SELECT * From customer_tb Where id_customer LIKE '%".$valueToSearch."%' OR name LIKE '%".$valueToSearch."%' OR surname LIKE '%".$valueToSearch."%' OR phonenumber LIKE '%".$valueToSearch."%' ";﻿
    $query = "SELECT * FROM customer_tb WHERE CONCAT(id_customer, name, surname, phonenumber) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM customer_tb";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "market_db");
     $connect->query("set names utf8");

    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="test.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>รหัสผู้เช่า</th>
                    <th>ชื่อ</th>
                    <th>เบอร์โทรศัพท์</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php 
                    while($row = mysqli_fetch_assoc($search_result)):
                    ?>
                <tr>
                    <td><?php echo $row['id_customer'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phonenumber'];?></td>
                    <td><?php echo $row['id_customer'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
