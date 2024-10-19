<?php

$filename = 'text.txt';
$somecontent = "Добавить это к файлу\n";
$somecontent = "Добавить это к файлу\n";

// Вначале убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {

    // В примере мы открываем $filename в режиме «записи в конец».
    // Поэтому смещение установлено в конец файла и
    // значение переменной $somecontent допишется в конец файла при вызове функции fwrite().
    if (!$fp = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }

    // Записываем значение переменной $somecontent в открытый файл.
    if (fwrite($fp, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }

    echo "Ура! Записали ($somecontent) в файл ($filename)";

    fclose($fp);
} else {
    echo "Файл $filename недоступен для записи";
}

?>