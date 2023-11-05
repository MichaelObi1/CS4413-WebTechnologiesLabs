<?php

$filename = "filedata.txt";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = $_POST["data"];
    $data2 = $_POST["data2"];

    if(!empty($data)) {
        $file = fopen($filename, "a");
        
        if($file) {
            fwrite($file, $data . PHP_EOL);
            fwrite($file, $data2 . PHP_EOL);

            fclose($file);

            echo "Sucessfully written data to the file.";
        }
        else {
            echo "ERROR: Unlable to open file.";
        }
    }
    else {
        echo "ERROR: No data provided.";
    }
}
else {
    echo "ERROR: Invalid request method. Use the POST method to save data.";
}

?>