<?php

function readCSV($file): array
{
    return array_map('str_getcsv', file($file));

}
function read_some_csv($file, $match): array{
    $temp_array = readCSV($file);
    $return_line = null;
    foreach($temp_array as $temp_line){
        if($temp_line[count($temp_line)-1] == $match){$return_line = $temp_line;}
    }
    return $return_line;
}
function write_csv($array, $file){
    $csv_file = fopen($file, 'w');
    foreach ($array as $line){
        fputcsv($csv_file, $line);
    }
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
echo '</pre>';
*/
