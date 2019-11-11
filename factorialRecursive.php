<?php
function factorialByRecursive($number) {
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorialByRecursive($number-1));
    }
}
echo factorialByRecursive(4);