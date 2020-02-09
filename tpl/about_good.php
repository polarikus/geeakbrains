<?php foreach ($orders as $goods):?>
    <div class="good">
        <h1><?=$goods['name'];?></h1>
        <a href="http://auction.lc/catalog&good=<?=$goods['id']?>"><img src="<?=$goods['path'].'/'.$goods['nameimg']?>" alt="<?=$goods['name']?>"></a>
        <p>Описание:<br><?=$goods['about']?></p>
        <p>Артикль: <?=$goods['article']?></p>
        <p>Количество: <?=$goods['count']?></p>
        <P>Продовец: <?=$goods['order']?></P>
        <a href="http://auction.lc/cart&good=<?=$goods['id']?>">В корзину</a>
    </div>
<?endforeach;?>

