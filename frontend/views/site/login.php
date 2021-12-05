<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dark-card shadow-sm">
    <div class="main-title">
        <i class="bi bi-info-square"></i> <?= $this->title?>
    </div>
    <div class="dark-card-body u-fancy-scrollbar" id="main-list-area">


        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="site-signup shadow">




                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <div class="form-group">
                            <?= Html::submitButton('Kirish', ['class' => 'btn btn-success shadow-sm', 'name' => 'login-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>