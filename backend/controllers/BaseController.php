<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/15
 * Time: 14:54
 */

namespace app\backend\Controllers;
use yii\web\Controller;
use yii\rbac\Item;


class BaseController extends Controller
{
    public function beforeAction($action)
    {
        if(!parent::beforeAction($action)){
            return false;
        }
        if(\Yii::$app->user->isGuest){
            return $this->redirect(['/site/login']);
        }
        return true;
    }
}