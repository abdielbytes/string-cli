<?php

// Display usage instructions if no arguments are provided
if ($argc < 3) {
    echo "Usage: php text_toolkit.php <command> <text>\n";
    echo "Commands:\n";
    echo "  count-words <text>       Count the number of words in the text.\n";
    echo "  reverse-sentence <text>  Reverse the entire sentence.\n";
    echo "  unique-words <text>      Display unique words in the text.\n";
    echo "  sort-words <text>        Sort words alphabetically.\n";
    echo "  split-to-array <text>    Split text into an array of words.\n";
    exit(1);
}

// Read command and input text
$command = $argv[1];
$text = $argv[2];

// CLI Commands
switch ($command) {
    case 'count-words':
        countWords($text);
        break;
    case 'reverse-sentence':
        reverseSentence($text);
        break;
    case 'unique-words':
        uniqueWords($text);
        break;
    case 'sort-words':
        sortWords($text);
        break;
    case 'split-to-array':
        splitToArray($text);
        break;
    default:
        echo "Unknown command: $command\n";
        break;
}

// Function to count words in a sentence
function countWords($text) {
    $words = str_word_count($text);
    echo "Number of words: $words\n";
}

// Function to reverse a sentence
function reverseSentence($text) {
    $reversed = strrev($text);
    echo "Reversed sentence: $reversed\n";
}

// Function to find unique words
function uniqueWords($text) {
    // Convert to lowercase and split text by spaces
    $words = array_map('strtolower', str_word_count($text, 1));
    $uniqueWords = array_unique($words);
    echo "Unique words: " . implode(", ", $uniqueWords) . "\n";
}

// Function to sort words alphabetically
function sortWords($text) {
    $words = str_word_count($text, 1);
    sort($words);  // Sort alphabetically
    echo "Sorted words: " . implode(" ", $words) . "\n";
}

// Function to split text into an array of words
function splitToArray($text) {
    $words = str_word_count($text, 1);
    echo "Words as array:\n";
    print_r($words);
}
