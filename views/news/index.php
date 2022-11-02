<?php

use app\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;

use kartik\form\ActiveForm;
use kartik\builder\TabularForm;

/** @var yii\web\View $this */
/** @var app\models\NewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php    
    $form = ActiveForm::begin([
        'id' => 'form-signup',
        'type' => ActiveForm::TYPE_HORIZONTAL
    ]);

    echo TabularForm::widget([
        'dataProvider'=>$dataProvider,
        'form'=> $form,
        'attributes'=> [
            // primary key column
            'id' => [ // primary key attribute
                'type' => TabularForm::INPUT_HIDDEN, 
                'columnOptions' => ['hidden'=>true]
            ],
            'title'=>['type' => TabularForm::INPUT_TEXT],
            'content'=>['type' => TabularForm::INPUT_TEXT],
            'date_add'=>[
                'type' => TabularForm::INPUT_STATIC,
                'format' => 'datetime'
            ],
        ],
        'actionColumn' => [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, News $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
                }
        ],
        'gridSettings'=>[
            'condensed' => true
        ]
    ]);
    // Add other fields if needed or render your submit button
    echo '<div class="text-right text-end">' . 
        Html::submitButton('Update', ['class'=>'btn btn-primary']) .
        '<div>';
    ActiveForm::end();
    
    ?>


</div>
