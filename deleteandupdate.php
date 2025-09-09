<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <h1>Change Account</h1>
    <form action="include/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"></br> </br>
         <input type="password" name="pwd" placeholder="Password"> </br> </br>
        <input type="text" name="email" placeholder="Email"></br> </br>

        <button>Update</button>
    </form> 


       <h1>Delete Acoount</h1>
    <form action="include/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"></br> </br>
         <input type="password" name="pwd" placeholder="Password"> </br> </br>
        <input type="text" name="email" placeholder="Email"></br> </br>

        <button>Delete</button>
    </form> 