<?php

use yii\bootstrap4\Tabs;
/* @var $this yii\web\View */
$this->title = 'Korxona malumotlari ';

?>

<div class="dark-card shadow-sm">
    <div class="main-title">
        <i class="bi bi-info-square"></i> <?= $this->title?>
    </div>
    <div class="dark-card-body u-fancy-scrollbar" id="main-list-area">
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <div class="left-area">
                    <div class="org-image">
                        <img src="/img/unnamed.png">
                    </div>
                    <div>
                        <span class="bi bi-star-fill text-warning"></span>
                        <span class="bi bi-star-fill text-warning"></span>
                        <span class="bi bi-star-half text-warning"></span>
                        <span class="bi bi-star text-warning"></span>
                        <span class="bi bi-star text-warning"></span>
                    </div>
                    <div class="info-sidebar">
                        <div class="info-bar">
                            Brend nomi
                            <div style="text-align: right;font-weight: 500">
                                    --- <i class="bi bi-dash-square-dotted"></i>
                            </div>
                        </div>
                        <div class="info-bar">
                            Rahbar
                            <div style="text-align: right;font-weight: 500">
                                --- <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <div class="info-bar">
                            Ro'yxatdan o'tgan sana
                            <div style="text-align: right;font-weight: 500">
                                 22.02.1991 <i class="bi bi-calendar2-event"></i>
                            </div>
                        </div>
                        <div class="info-bar">
                            Tel
                            <div style="text-align: right;font-weight: 500">
                                 --- <i class="bi bi-telephone"></i>
                            </div>
                        </div>
                        <div class="info-bar">
                            Manzil
                            <div style="text-align: right;font-weight: 500">
                                 --- <i class="bi bi-geo-alt"></i>
                            </div>
                        </div>
                    </div>

<!--                    <div class="info-bar">-->
<!--                        <i class="bi bi-calendar2"></i> Ro`yxatdan o`tgan sana: 22.02.2012-->
<!--                    </div>-->
<!--                    <div class="info-bar">-->
<!--                        <i class="bi bi-calendar2"></i> Ro`yxatdan o`tgan sana: 22.02.2012-->
<!--                    </div>-->

                </div>

            </div>
            <div class="col-lg-10 col-md-9">
                <div class="view-name">
                    <?= $model->name ?>
                    <div>
                        <i class="bi bi-geo-alt-fill"></i> <?= $model->ns10_name ?>, <?= $model->ns11_name ?> |
                        <i class="bi bi-flag"></i> <?= $model->tin ?>
                    </div>
                </div>
                <?php
                echo Tabs::widget([
                        'encodeLabels'=>false,
                    'items' => [
                        [
                            'label' => '<i class="bi bi-info-circle"></i> Umumiy malumotlar',
                            'content' => $this->render('_info',['tin'=>Yii::$app->request->get('tin')]),
                            'active' => true
                        ],
                        [
                            'label' => '<i class="bi bi-card-list"></i> Tovar xa xizmatlar',
                            'content' => '<div id="productList-area"></div>',
                        ],
                        [
                            'label' => '<i class="bi bi-bookmark"></i> Litsenziyalar',
                            'content' => 'Modul ishlab chiqish jarayonida!!!',
                        ],
                        [
                            'label' => '<i class="bi bi-people"></i> Tasischilar',
                            'content' => 'Modul ishlab chiqish jarayonida!!!',
                        ],
                        [
                            'label' => '<i class="bi bi-chat-square-text"></i> Izohlar',
                            'content' => 'Modul ishlab chiqish jarayonida!!!',
                        ],


                    ],
                ]);
                ?>

            </div>
        </div>
    </div>
</div>

<script>
    GetProduts(<?= $model->tin ?>);
</script>