<?php
if($_POST["contact"]) {
mail("tieshoenderdos@gmail.com" $_POST["description"],
$_POST["Bedankt voor uw bericht"]. "Van:"$_POST["email"]);
}
?>