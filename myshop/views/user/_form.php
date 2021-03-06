<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\myshop\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['id'=>"user-form" ]); ?>
    <?= $form->field($model, 'id')->hiddenInput(['value'=> $value])->label(false); ?> 
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'money')->textInput(['maxlength' => true]) ?>

    <?php /*
            $form->field($model, 'item_list')
            ->dropDownList(ArrayHelper::map(app\modules\myshop\models\Item::find()->all(), 'id', 'name'), ['multiple' => true]) */
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['id' => 'ok', 'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
