<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "backend".
 *
 * @property integer $id
 * @property integer $role_id
 * @property string $username
 * @property string $password
 * @property integer $invalid
 * @property string $last_login_ip
 * @property string $last_login_time
 */
class Backend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'backend';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'username', 'password', 'invalid'], 'required'],
            [['role_id', 'invalid'], 'integer'],
            [['username', 'password', 'last_login_ip'], 'string', 'max' => 50],
            [['last_login_time'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_id' => 'Role ID',
            'username' => 'Username',
            'password' => 'Password',
            'invalid' => 'Invalid',
            'last_login_ip' => 'Last Login Ip',
            'last_login_time' => 'Last Login Time',
        ];
    }
}
