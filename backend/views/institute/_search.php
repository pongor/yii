<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Search\InstituteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institute-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'name_zh') ?>

    <?= $form->field($model, 'address_en') ?>

    <?= $form->field($model, 'address_zh') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'buildyear') ?>

    <?php // echo $form->field($model, 'buildmonth') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'league_en') ?>

    <?php // echo $form->field($model, 'league_zh') ?>

    <?php // echo $form->field($model, 'brief_en') ?>

    <?php // echo $form->field($model, 'brief_zh') ?>

    <?php // echo $form->field($model, 'accept_rate') ?>

    <?php // echo $form->field($model, 'livingcost') ?>

    <?php // echo $form->field($model, 'tuition') ?>

    <?php // echo $form->field($model, 'employment_rate') ?>

    <?php // echo $form->field($model, 'compus_surrounding') ?>

    <?php // echo $form->field($model, 'compus_living') ?>

    <?php // echo $form->field($model, 'total_enrollment') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'scholarship') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <?php // echo $form->field($model, 'history_en') ?>

    <?php // echo $form->field($model, 'history_zh') ?>

    <?php // echo $form->field($model, 'graduation_rate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
