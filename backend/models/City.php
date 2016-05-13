<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $title
 * @property string $etitle
 * @property integer $state_id
 * @property integer $country_id
 * @property string $area
 * @property string $security
 * @property string $traffic
 * @property string $weather
 * @property string $brief
 * @property integer $race_ratio_id
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'country_id', 'race_ratio_id'], 'integer'],
            [['brief'], 'string'],
            [['title', 'etitle', 'area', 'security', 'traffic', 'weather'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'etitle' => 'Etitle',
            'state_id' => 'State ID',
            'country_id' => 'Country ID',
            'area' => 'Area',
            'security' => 'Security',
            'traffic' => 'Traffic',
            'weather' => 'Weather',
            'brief' => 'Brief',
            'race_ratio_id' => 'Race Ratio ID',
        ];
    }

}
