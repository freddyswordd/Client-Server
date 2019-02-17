<!doctype html>
<html>
    <head>
        <title>Indsæt Billeder til MySQL</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity=""></link>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-????"></script>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="userfile[]" value="" multipie="">
            <input type="submit" name="submit" value="Upload">
        </form>
    </body>

<?php

$mysqli = new mysqli('localhost','root','','Medicin') or die($mysqli->connect_error);
$table = 'img';

$phpFileUploadErrors = array(
    0 => 'Der er ingen fejl og filen blev uploaded',
    1 => 'Den oploadede fil er større end upload_max_filesize i php.ini',
    2 => 'Den oploadede fil er større end MAX_FILE_SIZW der var specifiret i HTML formen',
    3 => 'Den oploadede file var kun halvt oploaded',
    4 => 'Ingen fil blev oploaded',
    6 => 'Mangler en midlertidig mappe',
    7 => 'Fejlede at skrive filen til disken',
    8 => 'En PHP udvidelse stoppede filen for at blive uploaded',
);

//$_$FILES global variable
if(isset($_FILES['userfile'])){
    $file_array = reArrayFiles($_FILES['userfile']);
    //pre_r($file_array);
    for ($i=0;$i<count($file_array);$i++){
        if ($file_array[$i]['error'])
        {
            ?> <div class="alert alert-danger">
            <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
            ?> </div> <?php
        }
        else {

            $extensions = array('jpg','png','gif','jpeg');

            $file_ext = explode('.',$file_array[$i]['name']);

            $name = $file_ext[0];
            $name = preg_replace("!-!"," ",$name);
            $name = ucwords($name);

            $file_ext = end($file_ext);

            if (!in_array($file_ext, $extensions))
            {
                ?> <div class="alert alert-danger">
                <?php echo "{$file_array[$i]['name']} - Invalid file extension!";
                ?> </div> <?php
            }
            else {

                $img_dir = 'Piller/'.$file_array[$i]['name'];

                move_uploaded_file($file_array[$i]['tmp_name'],$img_dir);
                
                $sql = "INSERT IGNORE INTO $table (name, img_dir) VALUES('$name','$img_dir')";
                $mysqli->query($sql) or die($mysqli->error);
            
                ?> <div class="alert alert-success">
                <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
                ?> </div> <?php
            }
        }
    }
}

function reArrayFiles(&$file_post) {

    $file_any = array();
    $file_count =count($file_post['name']);
    $file_keys = array_keys($file_post);

    for($i=0; $i<$file_count; $i++){
        foreach ($file_keys as $key){
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
} 
