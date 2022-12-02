<?php

$isMale = false;
$isTall = true;

if ($isMale && $isTall) {
    echo "You are a tall male";
} else if ($isMale && !$isTall) {
    echo "You are a short male";
} else if (!$isMale && $isTall) {
    echo "You are not male but are tall";
} else {
    echo "You are not male and not tall";
}
