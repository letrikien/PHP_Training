<?php 
    //Bài 1:
    function checkValidString($str) {
        $b = strpos($str, "book");
        $r = strpos($str, "restaurant");
        if (($b !== false && $r !== false) || ($b === false && $r === false)) {
            return false;
        }
        return true;
    }

    //Bài 2:
    $file1 = fopen("file1.txt", "r");
    $file2 = fopen("file2.txt", "r");

    $str1 = fread($file1,filesize("file1.txt"));
    $str2 = fread($file2,filesize("file2.txt"));

    if (checkValidString($str1)) {
        $n = substr_count($str1, ".");
        echo "Chuỗi file1.txt hợp lệ. Chuỗi bao gồm " . $n . " câu.<br>";
    } else {
        echo  "Chuỗi file1.txt không hợp lệ.<br>";
    }

    if (checkValidString($str2)) {
        $n = substr_count($str2, ".");
        echo "Chuỗi file2.txt hợp lệ. Chuỗi bao gồm " . $n . "câu.";
    } else {
        echo  "Chuỗi file2.txt không hợp lệ.";
    }

    fclose($file1);
    fclose($file2);
?>