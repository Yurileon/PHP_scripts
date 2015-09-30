<?php

$filename = $argv[1];
$test_cases = fopen($filename, 'r+');

function fizz_buzz($test_cases) {
    while ($line = fgets($test_cases)) {
        if (substr($line, -1) == '\n') {
            $line = substr($line, 0, -1);
        }
        list($fizz, $buzz, $goal) = explode(' ', $line);
        $output = '';
        for ($i = 1; $i <= $goal; $i++) {
            if ($i % $fizz == 0) {
                $output .= 'F';
            }
            if ($i % $buzz == 0) {
                $output .= 'B';
            }
            if (($i % $fizz != 0) && ($i % $buzz != 0)) {
                $output .= strval($i);
            }
            $output .= ' ';
        }
        echo substr($output, 0, -1) . "\n";
    }
}       
        
fizz_buzz($test_cases);

fclose($test_cases);
?>
