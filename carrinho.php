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

setcookie('it1', $it1);
setcookie('it2', $it2);
setcookie('it3', $it3);
setcookie('it4', $it4);
setcookie('it5', $it5);
setcookie('it6', $it6);
setcookie('it7', $it7);
setcookie('it8', $it8);
setcookie('it9', $it9);
header('Location: catalogo.html');
?>