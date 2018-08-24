<?php
/**
 * Created by PhpStorm.
 * User: nina
 * Date: 23.08.18
 * Time: 17:43
 */

namespace app\controllers;
use app\models\Post;
use yii\data\Pagination;

class PostController extends AppController
{
    public function actionIndex($name = ''){
       // $posts = Post::find()->select('id,title,text')->limit(2)->all();
        $query = Post::find()->select('id,title,text')->orderBy('id DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        //debug($posts);
        return $this->render('index', ['posts' => $posts, 'pages' => $pages]);
    }

    public function actionView(){
        $id = \Yii::$app->request->get('id');//передали
        //параметр, который мы хотим получить из массива get
        //var_dump($id);die;
        $post = Post::findOne($id);//получаем запись из таблицы
        if(empty($post)){
            throw new \yii\web\HttpException(404, 'Такой страницы нет');
        }
        return $this->render('view', ['post'=>$post]);
    }

    public function actionTest(){
        return $this->render('test', []);
    }

}