<?php 
session_start();

session_unset();
session_destroy();

echo "<script>if (confirm(\"Are you want to logout??\")) {
    "+"
} else {
    txt = \"You pressed Cancel!\";
}</script>";

header("Location: index.php");
?>   



