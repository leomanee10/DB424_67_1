<?php
include 'header.php'
$sql = "select * , (activityID in (
        select activityID from register
        where studentID= '{$_SESSION['user']['studentID']}'    
        ),1,0) registed from activity
        where activityDate > curdate()";
$result = $conn->query($sql);
?>
<table class="table table-stripred">
    <tr class="table-dark">
        <th>activityID</th>
        <th>activityName</th>
        <th>activityDate</th>
        <th>stattime</th>
        <th>endTime</th>
    </tr>

<?php
while ($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo  "<td>{$row['activityID']}</td>";
  echo  "<td>{$row['activityName']}</td>";
  echo  "<td>{$row['activityDate']}</td>";
  echo  "<td>{$row['stattime']}</td>";
  echo  "<td>{$row['endTime']}</td>";
  echo  "<td>
         <a href='#' class='btn btn-sm btn-seccess ".
         ($row['registed'] ? 'disabled' : '')."'>+</a>
         <a href='#' class='btn btn-sm btn-danger ".
         ($row['registed'] ? '' : 'disabled')."'>-</a>
        </td>";
  echo '</tr>';
}
?>
</table>
<?php
include 'footer.php';
?>      



    