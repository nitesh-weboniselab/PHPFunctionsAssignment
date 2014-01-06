<?php
$songs = array('1' =>array('artist'=> 'Jason Aldean', 'song_name'=>'The Only Wat I Know'),
'2' => array('artist' => 'The Decemberists', 'song_name' => 'The Island'),
'3' => array('artist' => 'Fleetwood Mac', 'song_name' => 'Second-hand News'),
'4'=> array('artist'=> 'Justin Bieber' , 'song_name' => 'All around the word'),
'5'=>array('artist' => 'The Smashing Pumpkins', 'song_name' => 'Soma'));

/**
* sortMultidimensionalArray
*
* This function sort the multidimensional array. The input to
* this function is array , key on which array to be sort and order either DESC or ASC.
*  here we take mainKey i.e 1,2,3,4,5 as a key and given key i.e artist or song_name as a value
*  for temporarily array ($tempArray). Sort the temporarily array.
*  key value of Main array (songs) and temporarily array are same , using the key sequence of temporarily
*  temporarily array we push key and value of Main array into sortedArray.
*
* @param (array,string)
* @return (array)
*/

function sortMultidimensionalArray($array,$sortKey,$order) {
	$sortedArray=array();
	foreach($array as $key=>$subArray) {
		$tempArray[$key] = ($subArray[$sortKey]);
	}
	if($order=="DESC") {
	   arsort($tempArray);	
	} else {
		asort($tempArray);
	}
	
	foreach($tempArray as $key=>$value) {
		array_push($sortedArray, $array[$key]);
	}
	return $sortedArray;
}


$sortedMultidimensionalArray = sortMultidimensionalArray($songs,'artist','DESC');
print_r($sortedMultidimensionalArray);
?>