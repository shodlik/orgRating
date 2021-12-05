<?php

foreach ($model as $items){
?>
    <a href="/org/view?tin=<?= $items->tin?>" class="card-org">
        <div class="card-org-title">
            <?= $items->name?>
            <p><?= $items->ns10_name?> <?= $items->ns11_name?> </p>
        </div>
        <div class="card-action">
            <div class="btn btn-info btn-sm shadow-sm"><?= $items->tin?></div>
            <span class="card-stars">
                    <span><i class="bi bi-chat-right-text"></i> 96 |</span>
                    <span class="bi bi-star-fill text-warning"></span>
                    <span class="bi bi-star-fill text-warning"></span>
                    <span class="bi bi-star-half text-warning"></span>
                    <span class="bi bi-star text-warning"></span>
                    <span class="bi bi-star text-warning"></span>
                </span>
        </div>
    </a>

<?php }?>


