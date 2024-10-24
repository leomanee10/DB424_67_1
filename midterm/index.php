<?php
 include 'db.php';
$query = "SELECT CategoryName , CategoryID , Categories
FROM Categories LIMIT $start, $limit";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table class="table table-sm table-bordered table-striped">
          <tr>
          <th>CategoryName</th>
          <th>CategoryID</th>  

          </tr>';             
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<td> {$row['CategoryName']}</td>";
        echo "<td> {$row['CategoryID']}</td>";
     
        echo '</tr>';
    }
    echo '</table>';
} 
?>