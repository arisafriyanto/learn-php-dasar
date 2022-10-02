<?php

// Increment dan Decrement
// Preincrement dan Postincrement
// sebelum          sesudah

$a = 5;
$b = 5;

//postincrement = diprint dulu baru ditambahkan
var_dump($a); // 5
// $a = $a + 1;
var_dump($a++); // 5
var_dump($a); // 6

echo "\n";

// preincrement = ditambahkan dulu baru diprint
var_dump($b); // 5
// $b = 1 + $b;
var_dump(++$b); // 6
var_dump($b); // 6

echo "\n";

// predecrement
var_dump($a); // 6
var_dump($a--); // 6
var_dump($a); // 5

echo "\n";

// postdecrement
var_dump($b); // 6
var_dump(--$b); // 5
var_dump($b); // 5