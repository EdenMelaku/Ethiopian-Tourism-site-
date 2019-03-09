<!DOCTYPE html >
<html>
<head>

<title>SWE-HOME PAGE</title>
</head>
<body>
<?php
$chosen=array('1','2','3','4','5','6');
$ca="123456";
$data=array();

echo("array length =".count($chosen)." <br/>");
//combinationUtil($chosen, $data, 0, count($chosen)-1, 0,count($chosen));
//$array=explode(" ",$str); 
$str = "123";
$len=0;
permute($str,0,strlen($str)); // call the function.
$arr=array();


$rd="tydsughvgcdhsbxjz";
	  $arr=str_split($rd,1);
echo"the length of array=   ".$len;
function permute($str,$i,$n) {
	global $arr;
   if ($i == $n){
       print "$str\n";
	   
        echo"<br/>";
		
   }
   else {
        for ($j = $i; $j < $n; $j++) {
          swap($str,$i,$j);
          permute($str, $i+1, $n);
          swap($str,$i,$j); // backtrack.
       }
   }
}

// function to swap the char at pos $i and $j of $str.
function swap(&$str,$i,$j) {
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
}   

echo"the length of arr =  ".count($arr);
foreach($arr as $key => $val){
	
	
	echo $val.'   ';
}

function combinationUtil($arr,$data, $start, $end,
                     $index, $r)
{

    // Current combination is ready to be printed, print it
    if ($index == $r)
    {
		echo("data length =".count($data)." <br/>");
        for ($j=0; $j<$r; $j++){
            echo("{$data[$j]}");
        }echo("<br/>");
        
    }
 
    // replace index with all possible elements. The condition
    // "end-i+1 >= r-index" makes sure that including one element
    // at index will make a combination with remaining elements
    // at remaining positions
    for ($i=$start; $i<=$end && $end-$i+1 >= $r-$index; $i++)
    {
        $data[$index] = $arr[$i];
        combinationUtil2($arr, $data, $i+1, $end, $index+1, $r);
    }
		
}
	
	
	function combinationUtil2($arr,$data, $start, $end,
                     $index, $r)
{

    // Current combination is ready to be printed, print it
    if ($index == $r)
    {
        for ($j=0; $j<$r; $j++){
            echo("{$data[$j]}");
        }echo("<br/>");
        
    }
 
    // replace index with all possible elements. The condition
    // "end-i+1 >= r-index" makes sure that including one element
    // at index will make a combination with remaining elements
    // at remaining positions
    for ($i=$start; $i<=$end && $end-$i+1 >= $r-$index; $i++)
    {
        $data[$index] = $arr[$i];
        combinationUtil($arr, $data, $i+1, $end, $index+1, $r);
    }
		
	}

?>
</body>
<footer>&copy;edenMelaku 2018
</footer>
</html>