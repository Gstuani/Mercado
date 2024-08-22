<?php
echo '<h1>Lista de Compras.</h1>';
echo '<ul>
        <li>it1='.$_COOKIE['it1'].'</li>
        <li>it2='.$_COOKIE['it2'].'</li>
        <li>it3='.$_COOKIE['it3'].'</li>
        <li>it4='.$_COOKIE['it4'].'</li>
        <li>it5='.$_COOKIE['it5'].'</li>
        <li>it6='.$_COOKIE['it6'].'</li>
        <li>it7='.$_COOKIE['it7'].'</li>
        <li>it8='.$_COOKIE['it8'].'</li>
        <li>it9='.$_COOKIE['it9'].'</li>
      </ul>';
echo "<a href='index.html' style='color: black; text-decoration: none;'><h2><Retornar a Home.</h2></a>";
echo "<a href='carrinho3.php'><button>Finalizar Compra</button></a><br><br>";
?>