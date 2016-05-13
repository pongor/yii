<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Institute */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Institutes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institute-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_en',
            'name_zh',
            'address_en',
            'address_zh',
            'country_id',
            'buildyear',
            'buildmonth',
            'website',
            'league_en',
            'league_zh',
            'brief_en:ntext',
            'brief_zh:ntext',
            'accept_rate',
            'livingcost',
            'tuition',
            'employment_rate',
            'compus_surrounding:ntext',
            'compus_living:ntext',
            'total_enrollment',
            'city_id',
            'scholarship:ntext',
            'rank',
            'history_en:ntext',
            'history_zh:ntext',
            'graduation_rate',
        ],
    ]) ?>

</div>
