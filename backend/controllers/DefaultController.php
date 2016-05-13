<?php

namespace app\backend\Controllers;

use mdm\admin\components\AccessControl;
use yii\web\Controller;


/**
 * Default controller for the `backend` module
 */
class DefaultController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {  
        return $this->render('index');
    }
}
