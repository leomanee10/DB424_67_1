<?php
  require '../db.php';

  $sql = 'select studentID from student
          where studentID not in (
          select username from users
          )';
  $result = $conn->query($sql) ;
  $data = $result->fetch_all(MYSQLI_ASSOC);
  //echo '<pre>';
  //var_dump($data);
  //echo '</pre>';
  $conn->close();
  http_response_code(200);
  echo json_encode($data);
?>