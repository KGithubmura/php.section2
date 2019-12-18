<?php 
// 課題phpセクション4....


//No1
function sum($duble){
 $result = 0;
   $duble *= 2;
   $result = $duble;
   
  return $result;
  
}
echo sum(8);
echo "\n";




//No2
function totle($a,$b){
  $result = 0;
  $result = $a + $b;
  
  return $result;
}
echo totle(5,9);
echo "\n";




//No3
function total_array($arr){
  $num = 1;
  foreach ($arr as $number){
   $num *= $number;
  }
   return $num;
}
 $array = [1,3,5,7,9,];
 $result = total_array($array);
 echo $result;
 echo "\n";
 
 
  
//No4

function max_array($arr){
  
  $max_number = $arr[0];
  
  foreach ($arr as $a){
    if ($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
$array = [1,3,5,7,9];
$result = max_array($array);
echo $result;
echo "\n";




//No5

//strip_tags
$str = "<h1>HTMLタグ取り除く</h1>"."<p>HTMLタグ取り除く</p>";

echo strip_tags($str);
echo "\n";



//array_push
$array = ['a','b','c'];

array_push( $array , 'd' , 'e');

print_r($array);
echo "\n";


//array_merge
$lamgA =['a','b','c','d'];
$lamgB =['e','f','g','h'];
$lamgC =['r','j','k','l'];

$lang_merge = array_merge($lamgA,$lamgB,$lamgC);
print_r($lang_merge);
echo "\n";


//time,mktime
echo "(time)UNIXタイムスタンプ".time();
echo "\n";

$mkTime = mktime(0,0,0,12,18,2019);
echo "(mktime)UNIXタイムスタンプ".$mkTime;
echo "\n";


//date
$date = date('w');
echo $date;
echo "\n";

$nweek = ["日","月","火","水","木","金","土"];
$date = date('w');
echo $nweek[$date];
echo "\n";