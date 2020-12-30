
<?php 

    //ce script a été créer par louiskle voici un exemple

    require 'database.php';
    
    $mail = "lol@gmail.com"

    $db = Database::connect();
    $stmt = $db->prepare("SELECT username FROM accounts WHERE email= ?");
    $stmt->execute(array($mail));
    $username = $stmt->fetch();
    Database::disconnect();


    echo"$username";
?>