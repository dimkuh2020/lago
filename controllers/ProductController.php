<?php
namespace app\controllers;

use app\models\Category;
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

}

?>