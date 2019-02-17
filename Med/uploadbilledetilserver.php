<?php
    if(isset($_POST)['upload'])){
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_tem_loc =$_FILES['file']['tmp_name'];
        $file_store = "upload/".$file_name;
        if(move_uploaded_file($file_tem_loc, $file_store)){
            echo "Filen er uploaded";
        }

    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload af fil</title>
</head>
<body>
</html>
