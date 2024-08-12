<?php

if (isset($_POST['submit'])) {

    $path = "uploads";
    $upload_dir = $path . DIRECTORY_SEPARATOR;
    // echo 'Upload path: ' . $upload_dir . '<BR>';
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif', 'zip');
    $fileCount = 0;
    $tBytes = 0;

    $maxsize = 30 * 1024 * 1024;
    // Checks if user sent an empty form  
    if (!empty(array_filter($_FILES['files']['name']))) {

        foreach ($_FILES['files']['tmp_name'] as $key => $value) {
            $file_tmpname = $_FILES['files']['tmp_name'][$key];
            $file_name = $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $filepath = $upload_dir . $file_name;

            if (in_array(strtolower($file_ext), $allowed_types)) {
            } else {
                echo "<br />The {$file_ext} file extension is not allowed";
                continue;
            }
            if ($file_size < $maxsize) {
            } else {
                echo "<br />{$file_name} is too big";
                continue;
            }
            if (file_exists($filepath)) {
                echo "<br />{$file_name} already exists - file not overwritten";
                continue;
            }
            if (move_uploaded_file($file_tmpname, $filepath)) {
                echo  "<br />{$file_name} successfully uploaded ";
                $fileCount = $fileCount + 1;
                $tBytes = $tBytes + $file_size;
            } else {
                $message = "Non existant file";
                continue;
            }
        }
    }
    echo "<br>" . $fileCount . " files totalling " . number_format($tBytes / (1024 * 1024), 1) . " Mbytes uploaded";
}
?>

<div class="sessionv">
    <?php
    //$printR = print_r($_FILES, true);
    //echo str_replace('[', '<br>[', $printR);
    ?>
</div>


<div class="backo">
    <a class="backbutt" href="index.html">Back</a>
</div>