<?php

/**
* sample.ini is need tobe in same directory.
*
* here we open a file in read mode.
* read the line from file check it 
* if it contain [ or ] store it in 
* $mainArray
* otherwise split a line and store it in 
* $subKey and $subValue
*/

$file = fopen("sample.ini","r");
$mainKey=array();
$subKey=array();
$subValue=array();

while(!feof($file)) {
	$str=fgets($file);
    
    if(strchr($str,"]")) {
       array_push($mainKey,$str);
    } else {
          list($key,$val)=explode(" ", $str);
          array_push($subKey,$key);
          array_push($subValue,$val);
     
        }
}        

$parse = array($mainKey[0] => array($subKey[0]=>$subValue[0],$subKey[1]=>$subValue[1],$subKey[2]=>$subValue[2]),
	           $mainKey[1] => array($subKey[4]=>$subValue[4],$subKey[5]=>$subValue[5],$subKey[6]=>$subValue[6]));
print_r($parse);
?>