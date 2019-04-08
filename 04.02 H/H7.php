<?php
function word_digit($word) {
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'eight':
                $result .= '8';
                break;
        }
    }
    return $result;
}

echo word_digit("zero;three;five;six;eight;one")."\n";
?>
