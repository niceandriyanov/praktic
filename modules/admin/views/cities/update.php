<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cities */

$this->title = 'Редактирование: города';
$this->params['breadcrumbs'][] = ['label' => 'Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cities-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
