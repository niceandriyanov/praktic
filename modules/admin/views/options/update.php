<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Options */

$this->title = 'Редактирование: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="options-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
