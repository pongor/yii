<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\backend\models\Search\InstituteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '学校列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institute-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  // $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '添加学校'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name_en',
            'name_zh',
            'address_en',
            'address_zh',
            [
                'attribute' =>'country_id',

                'filter' =>\app\backend\models\Country::getAttrList(),
                'value' => function($data){
                    if($data->country_id > 0){
                        $res = \app\backend\models\Country::getAttrName($data->country_id);
                       return $res['name_zh']."(".$res['name_en'].")";
                    }
                },
                'filterOptions' => [
                    'width' => '120px'
                ],
            ],
            // 'country_id',
             [
                'attribute' =>'buildyear',
                 'value'    =>  function($data){
                     if($data->buildyear){
                         return $data->buildyear;
                     }else{
                         return '空';
                     }
                 }
             ],
           //  'buildmonth',

            // 'website',
            // 'league_en',
            // 'league_zh',
            // 'brief_en:ntext',
            // 'brief_zh:ntext',
            // 'accept_rate',
            // 'livingcost',
            // 'tuition',
            // 'employment_rate',
            // 'compus_surrounding:ntext',
            // 'compus_living:ntext',
            // 'total_enrollment',
            // 'city_id',
            // 'scholarship:ntext',
            // 'rank',
            // 'history_en:ntext',
            // 'history_zh:ntext',
            // 'graduation_rate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
