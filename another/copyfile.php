<?php

copy('testfile.txt', 'testfile2.txt') or die("копирование невохможно.");
echo "файл успешно скопирован.";

?>