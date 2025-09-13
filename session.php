<?php

session_start();

$_SESSION["username"] = "Gregory";

//How to unseat the session variable(deleting just one session data)
unset($_SESSION["username"]); 
// How to delete a session data (deleting all session data)
session_unset();

  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    echo $_SESSION["username"];
?>
</body>
</html>