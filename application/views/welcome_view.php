<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>Login with CI</title>
<center>
<?php if(isset($nama)) echo "<h2><span style='color:white;'>$nama</span></h2>";
echo "<br/>";
if(isset($email)) echo "<h2><span style='color:white;'>$email</span></h2>";
echo "<br/>";
if(isset($alamat)) echo "<h2><span style='color:white;'>$alamat</span></h2>";
echo "<br/>";
if(isset($no_telp)) echo "<h2><span style='color:white;'>$no_telp</span></h2>";
echo "<br/>";
echo anchor("login/logout", 'Logout') ?>
</center>
</body></html>



