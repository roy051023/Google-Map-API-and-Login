<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<center>
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM user_info where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '<h1>登入成功! <br></h1>';
        //echo '<a href="logout.php">登出</a>  <br><br>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=googlemap.php>';
}
else
{
        echo '<h1>登入失敗!</h1>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
?>
</center>