<?php

//課題phpセクション3....

$name = 'Yu';

if ($name == 'Yu') {
 echo 'あなたの名前です。';
}else {
 echo 'あなたの名前ではありません。';
}

$total = 0;

for ($i = 1; $i <= 10000; $i++) {
  $total += $i; 
}
echo $total;

$fruits = ['orange','apple','strawberry','cherry','banana'];
 foreach ($fruits as $value) {
  echo $value;
}

$i = 0;
for ($i = 1; $i <= 100; $i++){
  if ($i % 5 == 0) {
    echo "\n";
    echo $i;
  }
}