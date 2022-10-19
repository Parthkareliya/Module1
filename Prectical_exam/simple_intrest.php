<?php
$p = readline("Enter the Principal Amount: ");
$n = readline("Enter the Number of years: ");
$r = readline("Enter the Rate per Annum: ");
$si =   ($p * $n * $r) / (100);
echo ("Simple Interest is: $si");
?>