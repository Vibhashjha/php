<!DOCTYPE html>
<html>
<head>
<title>vote</title>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<div id="main">
<div class="aa">
<h1>Actress voting system</h1>
<form method="post" action="">
<input type="submit" name="aaa" value="Disha ">&nbsp&nbsp&nbsp
<input type="submit" name="bbb" value="Alia ">&nbsp&nbsp&nbsp
<input type="submit" name="ccc" value="Shraddha">

</form>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['aaa'])){
	$Disha=mysqli_query($con,"UPDATE actress SET Disha='Disha+1'"); 
	if($Disha)
	{
		echo "<div class='zzz'> You Successfully Voted To Disha Patani</div> " ;
	}
}
		if(isset($_POST['bbb'])){
	$Alia=mysqli_query($con,"UPDATE actress SET Alia='Alia+1'"); 
	if($Alia)
	{
	echo "<div class='zzz'> You Successfully Voted To Alia Bhatt</div> " ;	
	}
		}
		if(isset($_POST['ccc'])){
	$Shraddha=mysqli_query($con,"UPDATE actress SET Shraddha='Shraddha+1'"); 
	if($Shraddha)
	{
		echo "<div class='zzz'>You Successfully Voted To Shraddha Kapoor</div>";
}
}

?>
<?php include 'detail.php';?>
</div>
