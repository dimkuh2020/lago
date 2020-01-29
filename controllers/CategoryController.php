<?php
 namespace app\controllers;

 use app\models\Category;
 use app\models\Theme;
 use app\models\Product;
 use yii\data\Pagination;
 
 use Yii;

 class CategoryController extends AppController{
      
    public function actionIndex(){       
       
        return $this->render('index');
    }

    public function actionView($id){ //для получения всех товаров по категориям при клике на категории
        //$id = Yii::$app->request->get('id'); // можно не писать т.к. параметр id получили в методе       

        $category = Category::findOne($id);  

        if(empty($category))                             //404 ошибка если нету категории
            throw new \yii\web\HttpException(404, 'Нема категории(((');

        //$products = Product::find()->where(['category_id' => $id])->all();
            //или для пагин
        $query = Product::find()->where(['category_id' => $id]); 
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        
        $this->setMeta('LaGo | ' . $category->name, $category->keywords, $category->description);

        return $this->render('view', compact('products', 'pages', 'category'));

    }

    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q')); // запрос с вью
        $this->setMeta('E-SHOPPER | ' . $q); // для метатегов
        if(!$q) return $this->render('search');  // для исключение пробелов в поиске trim вверху Для q
        
        $query = Product::find()->where(['like', 'name', $q]); // найти в имени (талб) значение q 
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]); //пагин
        $products = $query->offset($pages->offset)->limit($pages->limit)->all(); //вывд товаров по пагинации

        return $this->render('search', compact('products', 'pages', 'q'));


    }

 }

?>