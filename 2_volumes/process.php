<?php
    $message = $_POST["message"];
    $files = scandir("./messages");
    $num_files = count($files) - 2; // . e ..
    $fileName = "msg-{$num_files}.txt";
    $file = fopen("./messages/{$fileName}", "X");
    fwrite($file, $message);
    fclose($file);
    header("Localtion: index.php");

?>