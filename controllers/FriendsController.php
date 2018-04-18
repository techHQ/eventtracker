<?php

namespace app\controllers;
use Yii;
use app\models\Friend;

class FriendsController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$friends = Friend::find()->All();
        return $this->render('index',['friend'=>$friends]);
    }
    $pagination = new Pagination([
        'defaultPageSize'=>5,
        'totalCount'     =>$query->count(),
       ]);
       $users = $query
         ->offset($pagination->offset)
         ->limit($pagination->limit)
         ->all();
   
       return $this->render('dash',
       [ 'users'=> $users,
        'pagination'=> $pagination,]);

 }

public function actionCreate(){
    $model = new Friend();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here

                $model->save();



            return $this->redirect('index');
        }
    }

    return $this->render('create', [
        'model' => $model,
    ]);
}



public function actionUpdate($id)
{
    //$model = new app\models\Friend();
     //$model = Friend::find($id)->one();
     $model = Friend::findOne($id);
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            $model->save();
             return $this->redirect('index');
        }
    }

    return $this->render('update', [
        'model' => $model,
    ]);
}


}

