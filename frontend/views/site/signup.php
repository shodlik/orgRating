<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = "Ro'yxatdan o'tish";
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="dark-card shadow-sm">
    <div class="main-title">
        <i class="bi bi-person-plus"></i> <?= $this->title?>
    </div>
    <div class="dark-card-body u-fancy-scrollbar" id="main-list-area">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="site-signup shadow">
                    <p>Koroxna yoki tashkilot STIRni kiriting:</p>

                            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>
                            <div class="form-group">
                                <?= Html::submitButton('<i class="bi bi-person-plus-fill"></i> Ro`yxatdan o`tish', ['class' => 'btn btn-warning shadow-sm', 'name' => 'signup-button']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
