<?php
foreach ($model as $items){
?>
<div class="product-card">
    <div class="product-name">
        <?= $items['className'] ?>
        <div>
            <?= $items['productName'] ?>
        </div>
    </div>
    <div class="product-bottom">
        <i class="bi bi-upc-scan"></i> <?= $items['classCode'] ?>
    </div>
</div>
<?php }?>
