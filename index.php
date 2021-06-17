<?php
session_start();

if(isset($_SESSION['username'])) {
    
// ----------------------------------CONTENT HERE---------------------------------- //
    echo '<center><h1>Selamat Datang </h1><br/> <h2><a href="./logout.php">Logout</a></h2>';
// ----------------------------------CONTENT HERE---------------------------------- //

} else {
    echo '<script>window.location.replace("./login.php");</script>';
}
?>
<body bgcolor="#56baed">