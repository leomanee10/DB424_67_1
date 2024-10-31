<?php
session_start();
require 'db.php'; 

if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = 'SELECT * 
            FROM users  JOIN student  
            ON username=studentID
            WHERE username=?';
    $stmt = $conn->prepare($sql);//ไม่ไว้ใจรหัสได้ แยกข้อมูลออกจากsql 
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = [
            'studentID'=>$row['studentID'],
            'firstName'=>$row['firstName'],
            'lastName'=>$row['lastName'],
        ];
       // $_SESSION['studentID'] = $row['studentID'];
       // $_SESSION['firstName'] = $row['firstName'];
        //$_SESSION['lastName'] = $row['lastName'];
       header('Location: index.php');
       exit();
    }
    else {
       echo 'Password ผิดไปใส่มาใหม่ดิ';
    } 
    }
    else {
      echo 'Username ไม่ถูกต้อง';  
    }
}
?>