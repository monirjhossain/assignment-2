<?php

function countVowels($string) {
    $vowelsCount = preg_match_all('/[aeiouAEIOU]/', $string);
    return $vowelsCount;
}

function reverseString($string) {
    return strrev($string);
}

function processStrings($strings) {
    foreach ($strings as $string) {
        $vowelCount = countVowels($string);
        $reversedString = reverseString($string);

        echo "Original String: $string\n";
        echo "Vowel Count: $vowelCount\n";
        echo "Reversed String: $reversedString\n";
        echo "-----------------------------\n";
    }
}

// Sample input array of strings
$inputStrings = ["Hello", "World", "PHP", "Programming"];

processStrings($inputStrings);

?>
