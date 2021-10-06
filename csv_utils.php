<?php

function readCSV($file): array
{
    $array = [];
    $csv_file = fopen($file, 'r');
    while (($line = fgetcsv($csv_file)) != feof($csv_file)){$array[] = $line;}
    fclose($csv_file);
    return $array;

}

function write_csv($array, $file){
    $csv_file = fopen($file, 'w');
    foreach ($array as $line){fputcsv($csv_file, $line);}
    fclose($csv_file);
}
function modify_csv_line($file, $line, $index){
    $temp = readCSV($file);
    $temp[$index] = $line;
    write_csv($temp, $file);
}

function make_blank_line($file, $index){
    $csv_file = fopen($file, 'w');
}
$authors = readCSV("authors.csv");
$quotes = readCSV("quotes.csv");


/*
echo '<pre>';
print_r($authors);
echo '<hr>';
print_r($quotes);
echo '<hr>';
print_r($users);
*/
