<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<center>
<?php
//將session清空
if(!isset($_SESSION['username']))
	header('Location: index.html');
unset($_SESSION['username']);
echo '<h1>登出成功 <br></h1>';
echo '<h2>可以滾了 <br><br></h2>';
echo '<a href="index.html">登入</a>  <br><br>';
?>
</center>