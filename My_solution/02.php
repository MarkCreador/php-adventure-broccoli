<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
--><?php

function isPalindrome($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9]/', '', $string);
    return $string == strrev($string);
  }
  
  $input_string = "noon";
  
  if (isPalindrome($input_string)) {
    echo $input_string . " is a palindrome.";
  } else {
    echo $input_string . " is not a palindrome.";
  }
  
  ?>
  