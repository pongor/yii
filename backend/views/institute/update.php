<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Institute */

$this->title = Yii::t('app', '修改 {modelClass}: ', [
    'modelClass' => 'Institute',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Institutes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', '更新');
?>
<div class="institute-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
      //  'country' =>$country
    ]) ?>

</div>
