<?php
/**

-- Pig Latin is a language game or argot in which words in English are altered, usually by adding a fabricated suffix or by moving the onset or initial consonant or consonant cluster of a word to the end of the word and adding a vocalic syllable to create such a suffix.


Programmer: Tat
Date: 16 May 2023

 */

// Function to determine if a letter is a vowel or consonant. 
/*This function vorc takes a letter as input and checks if it is equal to "a", "e", "i", "o", or "u". If it matches any of these vowels, it returns the string "vowel". Otherwise, it returns the string "consonant".*/

function vorc($i) {
    if ($i == "a" || $i == "e" || $i == "i" || $i == "o" || $i == "u"){
        return "vowel";
    } else {
        return "consonant";
    }
}

$words = "We are using Programming Techniques";


// Empty array to store the alphabet and its classifications. 
/*This line initializes an empty array $alphabet that will store the classification (vowel or consonant) for each letter in the alphabet.*/
$alphabet = array();

// Loop through the range of lowercase letters from 'a' to 'z'. 
/*This function vorc takes a letter as input and checks if it is equal to "a", "e", "i", "o", or "u". If it matches any of these vowels, it returns the string "vowel". Otherwise, it returns the string "consonant".*/
foreach (range('a', 'z') as $letter) {

    // Call the 'vorc' function to determine if the letter is a vowel or consonant
    $alphabet[$letter] = vorc($letter);
}

$alphabet['W'] = 'consonant';
$alphabet['P'] = 'consonant';
$alphabet['T'] = 'consonant';

$wordsArr = explode(" ", $words);

$result = [];
foreach ($wordsArr as $word) {
    $firstLetter = strtolower(substr($word, 0, 1));
    $restOfWord = substr($word, 1);
    
    if ($alphabet[$firstLetter] == "vowel") {
        $modifiedWord = $restOfWord;
    } else {
        $modifiedWord = $word;
    }
    
    $result[] = $modifiedWord . "oiy";
}

echo "original is: We are using Programming Techniques";

echo "<br>";
echo "<br>";

echo "Result is: " . implode("===", $result);



echo "<br>";
echo "<br>";

echo "The following is the code of this page";
echo "<br>";
echo "<br>";
echo "=======================================================";
echo "<br>";

// Get the filename of the current script
$filename = $_SERVER["SCRIPT_FILENAME"];

// Displayy the code of the file
highlight_file($filename)
/*
echo "original is: We are using Programming Techniques";

echo "<br>";
echo "<br>";

echo "Result is: ".translate ("We are using Programming Techniques");
    */

?>