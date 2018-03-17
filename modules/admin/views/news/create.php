<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = 'Добавление новости';
$this->params['breadcrumbs'][] = ['label' => 'Все новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
