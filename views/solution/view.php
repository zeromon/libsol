<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Solution */

$this->title = $model->solution_question;
$this->params['breadcrumbs'][] = ['label' => 'Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->solution_question;
?>
<div class="solution-view">

    <h1><?= Html::encode($model->solution_question) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_solution], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_solution], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'category.name_category',
            'solution_question',
            // 'solution_answer:ntext',
            [
                'attribute' => 'solution_answer',
                'value' => function($model){
                    return '<figure><pre><code>'.$model->solution_answer.'</code></pre></figure>';
                },
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
