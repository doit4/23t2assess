<?php
/**

-- Pig Latin is a language game or argot in which words in English are altered, usually by adding a fabricated suffix or by moving the onset or initial consonant or consonant cluster of a word to the end of the word and adding a vocalic syllable to create such a suffix.


Programmer: Tat
Date: 09 May 2023

 */
function translate($input, $suffix = "oiy") {
    $pattern = "/\b\w+\b/";
    preg_match_all($pattern, $input, $matches);

    $words = array();
    foreach ($matches[0] as $word) {
        # code...
        $words[] = $word . $suffix;
    }

// New pattern to find words containing case-sinsensitive vowels
    $vowel_pattern  = "/\b(?i)[aeiou]\w+\b/";

// Remove first character of words containing vowels
    foreach ($words as &$word) {
        if (preg_match($vowel_pattern, $word)) {
                $word = substr($word, 1);
        }
    }

    return implode("===", $words);
}

echo "original is: We are using Programming Techniques";

echo "<br>";
echo "<br>";

echo "Method 5 used regex pattern <br><br>";




$input = "We are using Programming Techniques.";
$suffix = "oiy";
$output = translate($input, $suffix);
echo "<h2>".$output."</h2>";




// Result is: Weoiy===reoiy===singoiy===Programmingoiy===Techiniquesoiu


echo "<br>";
echo "<br>";

echo "The following is the code of this page";
echo "<br>";
echo "<br>";
echo "=======================================================";


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


*/