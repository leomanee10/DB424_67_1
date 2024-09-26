<?php
$server = 'db403-mysql';
$username = 'root';
$password = 'P@ssw0rd';
$db = 'northwind';
$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_errno) {
    die($conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL First Contact</title>
</head>
<body>
   <?php
    $sql =  'SELECT * FROM categories';
    $result = $conn->query($sql);
    echo '<h3>แสดงข้อมูลทั้งหมดจากตาราง categories</h3>';
    echo '<table>';
    echo '<tr><th>CategoryID</th><th>CategoryName</th><tr>';
 while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo "<td>{$row['CategoryID']}</td>";
    echo "<td>{$row['CategoryName']}</td>";
    echo '</tr>';
    }
    echo '</table>';
    ?>

    <h3>1 แสดงข้อมูลชื่อสินค้า (productName) และราคาต่อหน่วย (UnitPrice) ของสินค้าที่มีราคามากกว่า 50 บาท จากนั้นจัดเรียงตามราคาจากสูงไปต่ำ</h3>
    <table>
        <tr>
            <th>ProductName</th>
            <th>UnitPrice</th>
<?php
 $sql = 'select ProductName, UnitPrice
         from products
         where UnitPrice > 50 
         order by UnitPrice desc';
         $result = $conn
?>
<?php
  $conn->close();
?>  

</body>
</html>
