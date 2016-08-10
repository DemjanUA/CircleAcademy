<?php

$file = file_get_contents('../json/parse.json');

$tmp = array();
$arr = json_decode($file, true);
foreach ($arr as $key => $val) {
    preg_match('/src=\'(.*)\'.*alt=\'(.*)\'/i', $val, $match);
    preg_match_all('/[\w]=\'(.*)\'/iU', $val, $match);
    $tmp[] = array(
        'title' => $match[1][1],
        'img' => $match[1][0]
    );
}

var_dump($tmp);