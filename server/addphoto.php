<?php
$server = "mysql51-104.perso";
$username = "argosappsql";
$password = "ilest11h29";
$database = "argosappsql";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);


$photopost = mysql_real_escape_string($_POST["manote"]);

$sqlphoto = "INSERT INTO retro_photo_utilisateur (photo_post) VALUES ('$photopost')";

if (!mysql_query($sqlphoto, $con)) {
        die('Error: ' . mysql_error());
} else {
        echo "Merci ! Votre photo a été ajoutée !";
}

mysql_close($con);
?>
