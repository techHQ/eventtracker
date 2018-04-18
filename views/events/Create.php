<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form ActiveForm */
?>
<div class="Events-Create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'description')->textArea(['rows' => 6]) ?>
        <?= $form->field($model, 'Venue') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'event_begin') ?>
        <?= $form->field($model, 'event_end') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Events-Create -->
