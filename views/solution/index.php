<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SolutionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solutions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solution-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solution', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php \yii\widgets\Pjax::begin(['id' => 'pjax-id']) ?>
    <?= GridView::widget([
        'id' => 'grid-id',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_solution',
            'solution_question',
            [
                'attribute' => 'name_category',
                'value' => 'category.name_category',
            ],
            // 'solution_answer:ntext',
            // 'id_category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php \yii\widgets\Pjax::end(); ?>
</div>
<script type="text/javascript">
// var input;
// var submit_form = false;
// var filter_selector = '#grid-id-filters input';
// var timeout = null;

// $("body").on('beforeFilter', "#grid-id" , function(event) {
//     return submit_form;
// });

// $("body").on('afterFilter', "#grid-id" , function(event) {
//     submit_form = false;
// });

// $(document)
// .on('input', filter_selector, function() {
//     input = $(this).attr('name');
//     clearTimeout(timeout);
//     timeout = setTimeout(() => {
//         if(submit_form === false) {
//             submit_form = true;
//             $("#grid-id").yiiGridView("applyFilter");
//         }
//     }, 1000);
// })
// .on('pjax:success', function() {
//     let i = $("[name='"+input+"']");
//     let val = i.val();
//     // i.focus();
//     // i.focus().val(val);
// });
</script>
