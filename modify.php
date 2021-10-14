<?php
require_once 'functions.php';
$id = $_GET['id'];
$changes = $_POST;

modify_csv_line('quote.csv', $id, $changes);
