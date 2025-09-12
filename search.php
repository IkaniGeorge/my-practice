<?php
//how to search users comment in db
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];
 

    try {
        require_once "include/dbh.inc.php";

        //since we re searching for comment, the query should SELECT
       $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);
        //$stmt->bindParam(":pwd", $pwd);
        //$stmt->bindParam(":email", $email);

        $stmt->execute();

        // In grabbing data,we actually grab the data and set it
        // equal to an array =[]
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("querry failed:" . $e->getMessage);
    }
}    else{
        header("Location: ../search_commet.php");

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
            <h1>Search Result</h1>

            <?php
        //  grabbing the comment the user made on the post or blog
            if (empty ($results)) {
                echo "<p> there were no result</p>";
            }else{
                foreach ($results as $row){
                    echo htmlspecialchars($row["username"]);
                    echo htmlspecialchars($row["comment_text"]);
                    echo htmlspecialchars($row["created_at"]);
                }
            }
            ?>
 
</body>
</html>