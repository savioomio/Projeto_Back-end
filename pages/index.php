<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: red;
            font-size:medium;
        }
    </style>
</head>
<body>
    <h1>bem vindo! <p><?php echo $_SESSION['username'];?></p> </h1>
</body>
</html>