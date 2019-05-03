<?php
$arr = [5,2,3,4,4];

foreach ($arr as $value) {
  echo $value . "\n";
}

echo "\n";

foreach ($arr as $key => $value) {
  echo $key . ' => ' . $value . "\n";
}

// while
echo "\n";

$i = 0;
while($i < count($arr)) {
  echo $arr[$i] . "\n";
  $i += 1; // $i++ toje samoe
}

// do while
echo "\n";

$i = 0;
do {
  echo $arr[$i] . "\n";
  $i += 1; // $i++ toje samoe
} while($i < count($arr));

// for
echo "\n";

for ($i=0; $i < count($arr); $i++) {
  echo $arr[$i] . "\n";
}
