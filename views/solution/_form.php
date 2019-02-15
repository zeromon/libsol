<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Solution */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solution-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'solution_question')->textInput(['maxlength' => true]) ?>

    <?= Html::activeDropDownList($model, 'id_category',
      ArrayHelper::map($category_model, 'id_category', 'name_category'),['prompt' => 'select category', 'class' => 'form-control']) ?>

    <!-- <a id="btn-code" class="btn btn-primary">Code</a> -->
    <?= $form->field($model, 'solution_answer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solution_refrence')->textInput(['maxlength' => true, 'placeholder' => 'link refrence']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
