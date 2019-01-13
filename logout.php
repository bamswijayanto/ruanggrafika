<?php
session_start();
session_unset();
session_destroy();


setcookie('bamswijayanto', '', time()-3600);
setcookie('ganteng', '', time()-3600);

header("Location: index.php");
exit;
?>