<?php
session_start();
if(!isset($_SESSION['user'])) {
   header('location: signin.html');
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <title>Student Activity</title>
</head>
<body>
    <h1> Welcome
   <?php
    echo $_SESSION['user']['firstName'].' '.
         $_SESSION['user']['firstName'];
   ?>     
    </h1>
    <button onclick="signout()">Sign Out</button>

    <script>
        function signout() {
            location.href = 'signout.php';
            //assign('signout.php');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>