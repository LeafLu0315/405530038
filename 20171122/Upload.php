<?php
    extract($_POST);
    $H=$height;
    $W=$weight;
    if(!$H || !$W) echo "Please type in all information.<br>";
    else {
        $BMI=$W/($H*$H);
        echo "height = $H m<br>weight = $W kg<br>BMI=$BMI<br>";
    }

    
	if($_FILES["file"]["error"]>0){
		if($_FILES["file"]["error"]==4){
			echo "Empty file.";
		}
    }
    else{
		if($_FILES["file"]["type"] && strstr($_FILES["file"]["type"],"image")==FALSE){
			echo "Wrong file type.";
		}
		else{
		    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
			echo '<img src="upload/'.$_FILES["file"]["name"].'"/>';
		}
	}
?>