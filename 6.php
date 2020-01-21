<?php

$menue = [
    'Главная' => 'index.php', 
    'Контакты' => 'contacts.php',
    'О компании' => 'about_us.ru',
    'Написать нам' => '?forma.php'
];
?>

<h1>Менюха</h1>
<ul>
    <?php 
    foreach($menue as $key => $value){
        echo "<a href='$value'>".'<li>'.$key.'</li>'.'</a>';
    }
    ?>
</ul>

\