<?php
    $it1 = $_POST['it1'];
    $it2 = $_POST['it2'];
    $it3 = $_POST['it3'];
    $it4 = $_POST['it4'];
    $it5 = $_POST['it5'];
    $it6 = $_POST['it6'];
    $it7 = $_POST['it7'];
    $it8 = $_POST['it8'];
    $it9 = $_POST['it9'];

    if ($it1 != '') {
        setcookie("$it1", $it1);
    }
    if ($it2 != '') {
        setcookie("$it2", $it2);
    }
    if ($it3 != '') {
        setcookie("$it3", $it3);
    }
    if ($it4 != '') {
        setcookie("$it4", $it4);
    }
    if ($it5 != '') {
        setcookie("$it5", $it5);
    }
    if ($it6 != '') {
        setcookie("$it6", $it6);
    }
    if ($it7 != '') {
        setcookie("$it7", $it7);
    }
    if ($it8 != '') {
        setcookie("$it8", $it8);
    }
    if ($it9 != '') {
        setcookie("$it9", $it9);
    }

    echo "<h1>Lista de Compras.</h1>";
    echo "<span>Item-1 - Quantidade = ".$it1."</span><br>";
    echo "<span>Item-2 - Quantidade = ".$it2."</span><br>";
    echo "<span>Item-3 - Quantidade = ".$it3."</span><br>";
    echo "<span>Item-4 - Quantidade = ".$it4."</span><br>";
    echo "<span>Item-5 - Quantidade = ".$it5."</span><br>";
    echo "<span>Item-6 - Quantidade = ".$it6."</span><br>";
    echo "<span>Item-7 - Quantidade = ".$it7."</span><br>";
    echo "<span>Item-8 - Quantidade = ".$it8."</span><br>";
    echo "<span>Item-9 - Quantidade = ".$it9."</span><br>";

?>;