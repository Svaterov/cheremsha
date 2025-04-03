<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function displayArrayWithNegativeNumbers($array) {

    if (!is_array($array)) {
        return false; 
    }


    echo '<div style="font-family: Arial, sans-serif;">';
    echo '<ul>';


    foreach ($array as $number) {
      
        if (is_numeric($number)) {
            
            if ($number < 0) {
                echo '<li style="color: red;">' . htmlspecialchars($number) . '</li>';
            } else {
                echo '<li>' . htmlspecialchars($number) . '</li>';
            }
        } else {
            
            echo '<li>' . htmlspecialchars($number) . '</li>';
        }
    }

    echo '</ul>';
    echo '</div>';

    return true; 
}


$array = [1, -2, 3, -4, 5];
$result = displayArrayWithNegativeNumbers($array);

if ($result) {
    echo 'Функция выполнена успешно.';
} else {
    echo 'Произошла ошибка.';
}
?>
</body>
</html>