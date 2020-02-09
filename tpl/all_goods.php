<?php foreach ($orders as $goods):?>
<div class="good">
    <p><?=$goods['name'];?></p>
    <a href="http://auction.lc/catalog&good=<?=$goods['id']?>"><img src="<?=$goods['path'].'/'.$goods['nameimg']?>" alt="<?=$goods['name']?>"></a>
    <p>Артикль: <?=$goods['article']?></p>
    <p>Количество: <?=$goods['count']?></p>
    <a href="http://auction.lc/catalog&good=<?=$goods['id']?>">Подробнее</a>
</div>
<?endforeach;?>


