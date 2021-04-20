<?php
if($_POST["Message"]) {
mail("tieshoenderdos@gmail.com", "Here is the sample subject line",
$_POST["Bedankt voor uw bericht"]. "From: test@test.com");
}
?>