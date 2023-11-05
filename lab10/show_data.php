<?php

$filename = "filedata.txt";

if(file_exists($filename)) {
    $file = fopen($filename, "r");
    if($file) {
        $entryNumber = 1;

        while(($line = fgets($file)) !== false) {
            echo "<tr><td>$entryNumber. $line</td></tr>";
            $entryNumber++;
        }

        fclose($file);
    }
    else {
        echo "Unable to open file.";
    }
}
else {
    echo "file does not exist.";
}

?>