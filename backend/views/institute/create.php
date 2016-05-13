<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\backend\models\Institute */

$this->title = Yii::t('app', 'Create Institute');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Institutes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institute-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,

    ]) ?>

</div>
