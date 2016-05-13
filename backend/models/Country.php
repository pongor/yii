<?php

namespace app\backend\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $name_en
 * @property string $name_zh
 * @property string $continent
 * @property string $area
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_en', 'name_zh', 'continent'], 'required'],
            [['name_en', 'name_zh', 'continent', 'area'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_en' => '中文名称',
            'name_zh' => 'Name Zh',
            'continent' => 'Continent',
            'area' => 'Area',
        ];
    }
    public static function getAttrName($id){
        if($id <= 0) return false;

        $db = self::getDb();
        $sql = "select * from ".self::tableName()." where id =$id";
        return $db->createCommand($sql)->queryOne();
    }
    public static function getAttrList(){
       // $query =  self::getDb()->createCommand("select * from ".self::tableName()." order by id asc")->queryAll();
        $query = self::find()->all();
        return ArrayHelper::map($query,'id','name_zh');
    }
}
