<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "institute".
 *
 * @property integer $id
 * @property string $name_en
 * @property string $name_zh
 * @property string $address_en
 * @property string $address_zh
 * @property integer $country_id
 * @property integer $buildyear
 * @property integer $buildmonth
 * @property string $website
 * @property string $league_en
 * @property string $league_zh
 * @property string $brief_en
 * @property string $brief_zh
 * @property double $accept_rate
 * @property string $livingcost
 * @property string $tuition
 * @property double $employment_rate
 * @property string $compus_surrounding
 * @property string $compus_living
 * @property double $total_enrollment
 * @property integer $city_id
 * @property string $scholarship
 * @property integer $rank
 * @property string $history_en
 * @property string $history_zh
 * @property double $graduation_rate
 */
class Institute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'institute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_en', 'name_zh'], 'required'],
            [['country_id', 'buildyear', 'buildmonth', 'city_id', 'rank'], 'integer'],
            [['brief_en', 'brief_zh', 'compus_surrounding', 'compus_living', 'scholarship', 'history_en', 'history_zh'], 'string'],
            [['accept_rate', 'employment_rate', 'total_enrollment', 'graduation_rate'], 'number'],
            [['name_en', 'name_zh', 'address_en', 'address_zh', 'website', 'league_en', 'league_zh', 'livingcost', 'tuition'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {   
        return [
            'id' => '学校编号',
            'name_en' => '学校英文名',
            'name_zh' => '中文名',
            'address_en' => '学校英文地址',
            'address_zh' => '中文地址',
            'country_id' => '国家',
            'buildyear' => '建校年份',
            'buildmonth' => '建校月份',
            'website' => '学校官网地址',
            'league_en' => '所属联盟',
            'league_zh' => '所属联盟中文',
            'brief_en' => '简介英文',
            'brief_zh' => '简介中文',
            'accept_rate' => '录取率',
            'livingcost' => '生活费',
            'tuition' => '学费',
            'employment_rate' => '就业率',
            'compus_surrounding' => '周边环境',
            'compus_living' => '生活介绍',
            'total_enrollment' => '接受率',
            'city_id' => '所在城市',
            'scholarship' => '奖学金介绍',
            'rank' => '综合排名',
            'history_en' => '历史英文',
            'history_zh' => '历史中文',
            'graduation_rate' => '毕业率',
        ];
    }
}
