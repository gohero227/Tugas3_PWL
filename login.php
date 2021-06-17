<?php


session_start();
if(isset($_SESSION['username'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
?>
<body bgcolor="#56baed">
        <font face="Comic sans MS" size ="3">
<link rel="stylesheet" href="style.css">
<div class="login">
<center><h1>Form Login</h1>
<form action="./cek_login.php" method="post">
<input type="username" name="username" placeholder="username" alt="username" required="required"/><br/>
<input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
<input type="submit" name="submit" value="Submit" alt="submit"/>
</form><br/>
</center>
<?php } ?>