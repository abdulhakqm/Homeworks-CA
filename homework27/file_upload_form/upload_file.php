<?php

if (!is_dir("file_uploads")){
    mkdir("file_uploads");
}
$targetDir = 'file_uploads';

if (isset($_FILES['fileWeUpload']) && !empty($_FILES['fileWeUpload']['name'])) {
    $filePath = pathinfo($_FILES['fileWeUpload']['name']);

    $ext = $filePath['extension'];
    $filename = $filePath['filename'];
    $hashFilename = md5($filename);

    $newPath = $targetDir.DIRECTORY_SEPARATOR.$hashFilename.".".$ext;

    $tmp_name = $_FILES['fileWeUpload']['tmp_name'];
    move_uploaded_file($tmp_name , $newPath);
    echo "<h2>File succesfuly uploaded!</h2>";
}

 

