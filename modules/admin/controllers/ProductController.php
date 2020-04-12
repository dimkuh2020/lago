<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Product;
use app\modules\admin\models\UploadImage;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
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

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
            'pagination' => [ //добавл. пагин
                'pageSize' => 10,            
            ],
            'sort' => [
                'defaultOrder' => [ //сортировка
                    'category_id' => SORT_ASC
                ]
            ]
        ]);

        if(Yii::$app->user->identity->email != 'admin@lago.net') 
            $this->redirect('/');

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if(Yii::$app->user->identity->email != 'admin@lago.net') 
            $this->redirect('/');

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->identity->email != 'admin@lago.net') 
            $this->redirect('/');

        $model = new Product();
        $model1 = new UploadImage(); // для нового поля для загрузки картинки

        $model1->image = UploadedFile::getInstance($model1, 'image');   // добавляем модель для загрузки картинки
        $model1->upload();                                              // 
        
        if($model1->image != null){
            $model->img = $model1->image->baseName . '.' . $model1->image->extension;
            $model->save();
        }     
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model, 'model1' => $model1,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->identity->email != 'admin@lago.net') 
            $this->redirect('/');

        $model = $this->findModel($id);
        $model1 = new UploadImage(); // для нового поля для загрузки картинки

        $model1->image = UploadedFile::getInstance($model1, 'image');   // добавляем модель для загрузки картинки
        $model1->upload();                                              // 
        
        if($model1->image != null){
            $model->img = $model1->image->baseName . '.' . $model1->image->extension;
            $model->save();
        }            
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['view', 'id' => $model->id]);
        }        

        return $this->render('update', [
            'model' => $model, 'model1' => $model1
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->identity->email != 'admin@lago.net') 
            $this->redirect('/');
            
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
