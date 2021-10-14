<?php

function readCSV($file): array{
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
function modify_csv_line($file, $index, $line){
    $temp = readCSV($file);
    $temp[$index] = $line;
    write_csv($temp, $file);
}

function make_blank_line($file, $index){
    $csv_file = fopen($file, 'w+');
}

function remove_quote($file1, $file2, $index){
    $temp1= readCSV($file1);
    $temp2 = readCSV($file2);
    $temp1 = array_splice($temp1, $index);
    $temp2 = array_splice($temp2, $index);
    write_csv($temp1,$file1);
    write_csv($temp2,$file2);
}
$authors = readCSV("/opt/lampp/htdocs/greatquotes/authors.csv");
$quotes = readCSV("/opt/lampp/htdocs/greatquotes/quotes.csv");



/*
echo '<pre>';
print_r($authors);
echo '<hr>';
print_r($quotes);
echo '<hr>';
echo '</pre>';
*/
