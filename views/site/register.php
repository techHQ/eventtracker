<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Faculty;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form ActiveForm */
?>
<div class="site-register">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Fullname') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'confirm_password') ?>
        <?= $form->field($model, 'faculty')->dropDownList(Faculty::find()
            ->select(['faculty','id'])
            ->indexBy('id')
            ->column(), ['prompt'=>'Select Faculty']
        ) ?>
        <?= $form->field($model, 'department')->dropDownList(['active'=>'Active','inactive'=>'inactive']) ?>
        <?= $form->field($model, 'courses')->dropDownList(['active'=>'Active','inactive'=>'inactive']) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
