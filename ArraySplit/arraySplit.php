<?php
$word =array('A'=>0 , 'a' =>0 ,'B'=>0,'b'=>0,'C'=>0,'c'=>0,'D'=>0,'d'=>0,'E'=>0,'e'=>0,'F'=>0,'f'=>0,'G'=>0,'g'=>0,'H'=>0,'h'=>0,'I'=>0,'i'=>0,'J'=>0,'j'=>0,'K' =>0,'k'=>0 ,'L'=>0 ,'l' =>0,'M'=>0 ,'m'=>0 ,'N'=>0 ,'n' =>0,'O' =>0,'o' =>0,'P' =>0,'p'=>0,'Q' =>0,'q'=>0,'R'=>0 ,'r'=>0 ,'S'=>0 ,'s'=>0 ,'T'=>0 ,'t'=>0 ,'u' =>0,'u'=>0 ,'V'=>0,'v'=>0 ,'W'=>0 ,'w'=>0 ,'X'=>0 ,'x'=>0,'Y'=>0 ,'y'=>0 ,'Z'=>0,'z'=>0 ); 
$upper =array();
$lower =array();
function word_count($filePath) {
	$file= fopen("$filePath", "r+");
	global $word;
	
	while(!feof($file)) {
		$str = fgetc($file);
		if ($str ==" " || $str=="\n" || $str=="," || $str=="." || $str=="0") {
		
		}else
	         $word["$str"]= $word[$str]+1;
	}
	 
	//print_r($word) ;
	return $word;
	//echo "<br>";
    fclose($file);	
}


/*
* splitArray()
*
* This function split the $word array into two different array $upper and $lower.
* $upper array contains only upper case letters 
* $lower array contains only lower case letters
*
*@param (array)
*@retuen ()
*/
function splitArray($word) {
	global $word,$upper,$lower;
    foreach($word as $key=>$value) {
        if(ctype_upper($key)) {
            $upper=array_merge($upper, array($key => $value));
        } else {
              $lower= array_merge($lower,array($key => $value));
          }
 
    }

}
$wordList=word_count("read.txt");
splitArray($word);
print_r($wordList);
echo "<br>";
echo "Uppercase array:<br>";
print_r($upper);
echo "<br>";
echo "Lowercase array:<br>";
print_r($lower);
?>