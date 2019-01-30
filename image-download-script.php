<?php

$file = fopen("images.csv","r");

while (($data = fgetcsv($file)) !== FALSE) {
  $file_url = $data[1];

  $file_array = explode('/', $file_url);
  $file_name = $file_array[7];

  $file_name_array = explode('.', $file_name);

  $file_extension = array_pop($file_name_array);

  $new_file_name = $data[0] . '.' . $file_extension;

  file_put_contents($new_file_name, fopen($file_url, 'r'));

}

fclose($file);
