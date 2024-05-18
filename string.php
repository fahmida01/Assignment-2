<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelCount = 0;
    $reversedString = strrev($string);

    for ($i = 0; $i < strlen($string); $i++) {
        $vowelCount += in_array(strtolower($string[$i]), $vowels) ? 1 : 0; 
    }
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
