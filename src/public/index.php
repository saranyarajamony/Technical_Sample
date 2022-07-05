<?php
require_once __DIR__.'../../vendor/autoload.php';

use App\Words;
use App\Numbers;

echo '<br/>//---------------Question1 ------------------------------ <br/>';
$words = new Words();
try{   
    $word= 'Double-down';
    echo $words->isHeterogram($word) ? 'The word : "' . $word . '"' . ' is a heterogram': 'The word : "' . $word . '"' . ' isn\'t a heterogram';
   }
catch(\Throwable) {
    echo 'Invalid argument passed';
}

echo '<br/>//---------------Question2 ------------------------------ <br/>';

$numbers = new Numbers();
try{   
    echo $sum = $numbers->digitSum(8973578353);
   }
catch(\Throwable) {
    echo 'Invalid argument passed';
}


?>