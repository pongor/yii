<?php

namespace app\backend\Controllers;

use app\backend\models\Country;
use Yii;
use app\backend\models\Institute;
use app\backend\models\Search\InstituteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InstituteController implements the CRUD actions for Institute model.
 */
class InstituteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    //初始化百度编辑器 上传方法
    public function actions()
    {
        return [
            'upload' => [ // 放在web配置文件中
                'class' => 'kucha\ueditor\UEditorAction',
                'config' => [
                   // "imageUrlPrefix"  => "http://127.0.0.1",//图片访问路径前缀
                    "imagePathFormat" => \Yii::getAlias('@web')."/../static/ue/{yyyy}{mm}{dd}/{time}{rand:6}" //上传保存路径
                ],
            ]
        ];
    }

    /**
     * Lists all Institute models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InstituteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Institute model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Institute model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Institute();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Institute model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
//        echo '<pre>';
//        if(($country = Country::findOne($model->country_id)) !== null){
//            $country = $country;
//        }
//       // $country = Country::findOne(2) !== null;
//        var_dump($model->country_id);
//        print_r($id);
//        print_r(Yii::$app->request->post());
//        die;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
               // 'country' => $country

            ]);
        }
    }

    /**
     * Deletes an existing Institute model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Institute model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Institute the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Institute::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
