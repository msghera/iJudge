<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

//$description= $_POST['description_entered'];


if (isset($name)) {
	$file_name_new=uniqid('' . true) . '.' . $fileextension;
	echo $file_name_new;
	$path= 'files/' . $file_name_new;

	if (!empty($name)){
		if (move_uploaded_file($tmp_name, $path)) {	
			echo 'Uploaded!';
		}
		else{
			echo 'not Uploaded';
		}
	}
}
?>