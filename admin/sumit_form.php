<?php
$link=$_REQUEST['success'];
if(!isset($_SESSION))
  {
    session_start();
  }
  if(!isset($_SESSION['email']))
  {
    echo "<script>window.location.href='../index.php'</script>";
  }
  if($_SESSION['ROLE']!="ADMIN")
  {
    echo "<script>window.location.href='../index.php'</script>";
  }
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("success").click();
}
</script>
</head>
<body onLoad="myfunction()">
<form action="index.php" method="post" id="myform">
	<input hidden="" type="text" name="success" value="<?php echo"$link";?>">
    <button hidden="" type="submit" id="success" data-modal="success" name="success" value="success"></button>
</form>


<!--<?php
$link=$_REQUEST['success2'];
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("success2").click();
}
</script>
</head>
<body onLoad="myfunction()">
<form action="index.php" method="post" id="myform">
	<input hidden="" type="text" name="success2" value="<?php echo"$link";?>">
    <button hidden="" type="submit" id="success2" data-modal="success2" name="success2" value="success2"></button>
</form>--->


<h1 style="padding-left:400px; padding-top:200px;"><img src="../images/loading-x.gif" /></h1>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>