<?php 
    $mas = scandir("images");
    foreach($mas as $img):?>
       <?php
        if($img == "." || $img == ".."):
            continue;?>
        <?php else:?>
                <a href='images/<?=$img?>'><img src='images/<?=$img?>' alt='<?=$img?>' width='150px' height='200px'></a>
            
        <?php endif; ?>
    <?php endforeach; ?>

