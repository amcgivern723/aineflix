<?php
//requires the config page as it contains the conection variable 
require_once("../includes/config.php");

//sending data using the post method 
if(isset($_POST["videoId"]) && isset($_POST["username"])) {
    $query = $con->prepare("SELECT * FROM videoProgress 
                            WHERE username=:username AND videoId=:videoId");
    $query->bindValue(":username", $_POST["username"]);
    $query->bindValue(":videoId", $_POST["videoId"]);

    $query->execute();

    if($query->rowCount() == 0) {
        
        $query = $con->prepare("INSERT INTO videoProgress (username, videoId)
                                VALUES(:username, :videoId)");
        $query->bindValue(":username", $_POST["username"]);
        $query->bindValue(":videoId", $_POST["videoId"]);
    
        $query->execute();
        
    }
}
else {
    echo "No videoId or username passed into file";
}
?>