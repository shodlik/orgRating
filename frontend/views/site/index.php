<?php

/* @var $this yii\web\View */

$this->title = 'Korxona tashkilotlarni baholash tizimi';
$count_yur = \common\models\LegalEntitiesReester::find()->count();
$count_yatt = \common\models\PhysicalEntities::find()->count();
$count_mri = \common\models\Mri::find()->count();


?>
<div class="dark-card shadow-sm">
    <div class="main-title">
        <i class="bi bi-front"></i> <?= $this->title?>
    </div>
    <div class="dark-card-body u-fancy-scrollbar" id="main-list-area">
        <div class="dashboard-area">
            <div class="row">
                <div class="col-md-3">
                    <div class="dsh-card bg-primary shadow text-primary">
                        <div class="dsh-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <div class="dh-text text-white">
                            <div>
                                Jami tadbirkorlik subyektlari
                            </div>
                            <?= number_format($count_yur+$count_yatt)?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dsh-card bg-primary shadow text-danger">
                        <div class="dsh-icon">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <div class="dh-text text-white">
                            <div>
                                Yuridik shaxlar
                            </div>
                            <?= number_format($count_yur)?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dsh-card bg-primary shadow text-warning">
                        <div class="dsh-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="dh-text text-white">
                            <div>
                                Yakka tadbirkorlar
                            </div>
                            <?= number_format($count_yatt)?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dsh-card bg-primary shadow text-success">
                        <div class="dsh-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="dh-text text-white">
                            <div>
                                Yirik soliq to`lovchilar
                            </div>
                            <?= number_format($count_mri)?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 area-top">
                    <h4 class="text-white">Top korxona tashkilotlar </h4>

                    <?php
                    $model = \common\models\LegalEntitiesReester::find()
                        ->select("yur.*, yur2.to_be_paid_tax tax, mri.tin mri_tin")
                        ->from(\common\models\LegalEntitiesReester::tableName()." yur")
                        ->leftJoin(\common\models\TaxPayerReester::tableName()." yur2","yur2.tin = yur.tin")
                        ->leftJoin(\common\models\Mri::tableName()." mri","mri.tin=yur.tin")
                        ->leftJoin(\common\models\NdsReester::tableName()." nds","nds.tin=yur.tin")
                        ->where('yur2.to_be_paid_tax=0')
                        ->limit(20)
                        ->all();
                    foreach ($model as $items){
                        ?>
                        <a href="/org/view?tin=<?= $items->tin?>" class="card-org <?= ($items->mri_tin!=null)?'bg-success text-white':''?>">

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
                </div>


            </div>


        </div>
    </div>
</div>

<script>
    // GetOrgList();
</script>