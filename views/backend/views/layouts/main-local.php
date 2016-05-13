<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\backend\models\menu */
/* @var $form ActiveForm */
?>
<div class="backend-views-layouts-main-local">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'parent') ?>
        <?= $form->field($model, 'order') ?>
        <?= $form->field($model, 'data') ?>
        <?= $form->field($model, 'route') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- backend-views-layouts-main-local -->
