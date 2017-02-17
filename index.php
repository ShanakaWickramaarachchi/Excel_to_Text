<?php
$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "newname.".$ext;

$target = 'x/'.$newname;
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
?>


<h2>Excel File Uploader</h2>
<form action='' method='POST' enctype='multipart/form-data'>
<input type='file' name='userFile'><br>
<input type='submit' name='upload_btn' value='upload'>
</form>

