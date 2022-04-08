<?php
$line= $_GET['name'];
echo "Получаемая строка: " . $line;
echo "<br>";
echo "Длина строки: " . iconv_strlen($line);