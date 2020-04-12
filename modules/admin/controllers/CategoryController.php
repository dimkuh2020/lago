<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Category;
use app\modules\admin\models\UploadImage;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);

        if(Yii::$app->user->identity->email != 'admin@lago.net') 
            $this->redirect('/');

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->identity->email != 'admin@lago.net') 
            $this->redirect('/');

        $model = new Category();
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
     * Updates an existing Category model.
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
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
