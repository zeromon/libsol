<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solution */

$this->title = 'Update Solution: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_solution, 'url' => ['view', 'id' => $model->id_solution]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solution-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
