<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function numberToText($number) {
 
    if (!is_numeric($number) || $number < 0 || $number > 9999) {
        return false; 
    }

 
    $units = [
        '', 'один', 'два', 'три', 'четыре', 'пять', 
        'шесть', 'семь', 'восемь', 'девять'
    ];
    
    $teens = [
        'десять', 'одиннадцать', 'двенадцать', 
        'тринадцать', 'четырнадцать', 'пятнадцать',
        'шестнадцать', 'семнадцать', 'восемнадцать',
        'девятнадцать'
    ];
    
    $tens = [
        '', '', 'двадцать', 'тридцать', 
        'сорок', 'пятьдесят', 
        'шестьдесят', 'семьдесят',
        'восемьдесят', 'девяносто'
    ];
    
    $hundreds = [
        '', 'сто', 'двести', 
        'триста', 'четыреста',
        'пятьсот', 'шестьсот',
        'семьсот', 'восемьсот',
        'девятьсот'
    ];

    
    $thousands = floor($number / 1000);
    $hundred = floor(($number % 1000) / 100);
    $ten = floor(($number % 100) / 10);
    $unit = $number % 10;


    $result = '';

    if ($thousands > 0) {
        $result .= $units[$thousands] . " тысяча ";
    }

    if ($hundred > 0) {
        $result .= $hundreds[$hundred] . " ";
    }

    if ($ten == 1 && $unit > 0) { 
        $result .= $teens[$unit - 1] . " ";
    } else {
        if ($ten > 1) {
            $result .= $tens[$ten] . " ";
        }
        
        if ($unit > 0) {
            $result .= $units[$unit] . " ";
        }
    }

    return trim($result); 
}


$number = 4532;
$textRepresentation = numberToText($number);

if ($textRepresentation !== false) {
    echo "$number — это \"$textRepresentation\".";
} else {
    echo "Ошибка: введено некорректное число.";
}
?>
</body>
</html>