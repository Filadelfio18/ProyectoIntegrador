<?php
session_start();
session_destroy();

session_start();
$_SESSION['username']='invitado';


header ("location: index.php");

?>