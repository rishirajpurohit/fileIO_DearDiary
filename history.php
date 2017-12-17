<?php

if(isset($_GET['fileName'])){
	$foundFile = $_GET['fileName'];
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>History</title>
</head>
<body>
	<div id="main"> 
		<h2>History Books</h2>
	</div>

	<div id="body">

		<?php if(isset($foundFile)){ 
				$fhandle = fopen($foundFile.".txt",'r');
				$bodyText = fread($fhandle,67890);
				echo $bodyText;





				$dir    = __DIR__;
$files1 = scandir($dir);
echo "<hr/><br/><br/><br/><br/><br/>Files : <br/>";

$num = 1;

foreach ($files1 as $file) {
	if($file == '.' || $file == ".." || $file =="history.php" || $file == "index.php"){
		continue;
	}


	$file_arr = explode(".", $file);
	//print_r($file_arr[0]);
	$name = $file_arr[0];

	echo $num." :  <a href='http://localhost/DearDiary/history.php?fileName=".$name."&Search=Submit'>".$file."</a><br/>";

	$num++;
}
			?> 

			

		<?php }else{ ?> 
		
			<form method="get">
				<input type="text" name="fileName" />
				<input type="submit" name="Search">
			</form>
			

		<?php } ?>
		
	</div>
</body>
</html>