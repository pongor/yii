<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kucha\ueditor\UEditor;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Institute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_zh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_zh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_id')->dropDownList(\app\backend\models\Country::getAttrList(),[ 'prompt'=>'--请选国家--','onchange' =>'$(this).val();']) ?>

    <?= $form->field($model, 'buildyear')->textInput() ?>

    <?= $form->field($model, 'buildmonth')->textInput() ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'league_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'league_zh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brief_en')->widget(Ueditor::className(),[
        'options'=>[
            'focus'=>true,
            'height' => '100px'
        ]
    ]) ?>

    <?= $form->field($model, 'brief_zh')->widget(Ueditor::className(),[
        'options'=>[
            'focus'=>true,
        ]
    ]) ?>

    <?= $form->field($model, 'accept_rate')->textInput() ?>

    <?= $form->field($model, 'livingcost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employment_rate')->textInput() ?>

    <?= $form->field($model, 'compus_surrounding')->widget(Ueditor::className(),[
        'options'=>[
            'focus'=>true,
        ]
    ]) ?>

    <?= $form->field($model, 'compus_living')->widget(Ueditor::className(),[
        'options'=>[
            'focus'=>true,
        ]
    ]) ?>

    <?= $form->field($model, 'total_enrollment')->textInput() ?>

    <?= $form->field($model, 'city_id')->dropDownList([],[ 'prompt'=>'--请选城市--']) ?>

    <?= $form->field($model, 'scholarship')->widget(Ueditor::className(),[
        'options'=>[
            'focus'=>true,
        ]
    ]) ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <?= $form->field($model, 'history_en')->widget(Ueditor::className(),[
        'options'=>[
            'focus'=>true,
            ]
        ]) ?>


    <?= $form->field($model, 'history_zh')->widget(Ueditor::className(),[
        'options'=>[
            'focus'=>true,
        ]
    ]) ?>

    <?= $form->field($model, 'graduation_rate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  </div>
