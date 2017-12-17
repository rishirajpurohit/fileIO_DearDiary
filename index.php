<?php
if(isset($_POST["submit"])){

	$title = $_POST["title"];
	$body = $_POST["notes"];

	$filePointer = fopen($title.".txt", "a+");

	if($filePointer){
		//write
		//fwrite($filePointer,$body);
		fputs($filePointer,"\n hi there today entry : ".$body);
		fclose($filePointer);
	}

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Dear Diary</title>
</head>
<body>
	<style type="text/css">
	

	span#DD {
    float: left;
    margin-left: 8px;
	}

	span#history {
    float: right;
    margin-right: 10px;
	}

    </style>

	<center>
	<div id="logo">
		<span id="DD">DD</span>
		<span id="history"><a href="history.php">History</a></span>
	</div>

	<br/><br/>

	<div id="title"> <h2>Dear Diary</h2> </div>
	<br/>
	<br/>
    <hr>
    <div id="input"> 
    	<form method="post" >
    		<span id='formInputLabel'>Title:</span> 
    		<input type="text" name="title" />
    		<br/>
    		<span id='formInputLabelNotes'>Notes: </span>
    		<textarea name="notes" placeholder="ENTER YOUR NOTES HERE"></textarea>
    		<br/>
    		<input type="submit" name='submit' value="save">
    	</form>
    </div>
</center>
</body>
</html>