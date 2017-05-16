<?php
$f = fopen("file.csv", "rt");
for ($i=1; $text=fgetcsv($f,1000,","); $i++) {
  $num = count($text);
  echo "Вопрос № $i: ";
  for ($c=0; $c<$num; $c++)
    print "$text[$c]<br>";
}
fclose($f);