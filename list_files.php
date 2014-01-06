<?php
$count = 0;
$dir = "/var/tmp/nitesh";



/**
* list_file()
*
* This function list the files in current directory and in sub directory.
* list the files in sequence in one directory i.e giveing numbers to file.
* 
*@param (string,int)
*@return ()
*
*/


function list_file($dirPath, $count){
    //$dir = $path;
    $readDirectory = opendir($dirPath);
    echo "Directory<br> $dirPath <br>";
    while($file = readdir($readDirectory)){
        if(is_dir("$dirPath/$file") && $file != '.' && $file != '..'){
            echo "Directory<br> $dirPath/$file <br>";
           list_file("$dirPath/$file",0);
        } else{
         if ($file != '.' && $file != '..') {
             $count++;
             echo "$count: $file <br/>";
         }

     }
 }
}

list_file($dir, $count);

?>