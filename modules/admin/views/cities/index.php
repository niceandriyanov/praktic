<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список городов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cities-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить город', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'cod',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
