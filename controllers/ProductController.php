<?php
namespace app\controllers;

use app\models\Product; 
use yii\data\Pagination; 
use Yii;


class ProductController extends AppController{

    public function actionIndex(){ // вывод всех товаров + пагинация       
       
        $query = Product::find();        
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();                
        
        $this->setMeta('LaGo | Все продукты');

        return $this->render('index',  compact('products', 'pages'));
    }

    public function actionView($id){        
        //$id = Yii::$app->request->get(); // выбрать всё из бд по id  //можно без него.
        $product = Product::findOne($id); // ленивая загрузка
        //или жадная
        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();

        if(empty($product))  //404 ошибка если нету продукта
            throw new \yii\web\HttpException(404, 'Нема продукта(((');
                
        //$hits = Product::find()->where(['hit' => '1'])->limit(6)->all(); // для хит сезона новинка и т.д.
        $this->setMeta('LaGo | ' . $product->name, $product->keywords, $product->description);

        return $this->render('view', compact('product'));
    }

}

?>