<?php

$filePath = __DIR__ . '/sample/user-list.csv';

$fileResource = fopen($filePath, 'r');
if ($fileResource == false) {
  exit(sprintf('Cannot read [%s] file.', $filePath));
}

$readLength = 65; // in bytes
$iteration = 0;

while (!feof($fileResource)) {
  $iteration++;
  $chunk = fread($fileResource, $readLength);
  echo $chunk;
}

fclose($fileResource);
echo sprintf("\n%s iteration(s)", $iteration);
