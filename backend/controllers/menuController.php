<?php

namespace app\backend\Controllers;

class menuController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
