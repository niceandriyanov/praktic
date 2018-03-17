<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = 'Обновить: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Все новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="news-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
