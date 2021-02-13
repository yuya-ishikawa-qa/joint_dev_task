<?php
$programming_languages = ["php","ruby","python","javascript"];
$programming_languages = array_map('ucfirst',$programming_languages);
$upper_case_programming_languages = array_map('strtoupper',$programming_languages);
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);
?>
?>
