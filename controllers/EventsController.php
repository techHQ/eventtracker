<?php

namespace app\controllers;
use yii;
use app\models\Events;

class EventsController extends \yii\web\Controller
{
    public function actionIndex()
    {   
    	$Events = Events::find()->All();
        return $this->render('index',['event'=>$Events]);
    }


    public function actionCreate()
{
      $model = new Events();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            $model->save();
            return $this->redirect('index');
        }
    }

    return $this->render('Create', [
        'model' => $model,
    ]);
}

public function actionUpdate($id)
{
    $model = EVents::findOne($id);

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


public function actionDelete($id)
{
    $model = Events::findOne($id);

    $model->delete();

    return $this->redirect('index');
}



}