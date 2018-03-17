<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Options */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'code')->dropDownList([ 'header' => 'Header', 'footer' => 'Footer']) ?>
    <?php if($model->type == 'text' || empty($model->type)){ ?>
        <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>
    <?php }elseif($model->type == 'textarea'){
        echo $form->field($model, 'value')->textarea(['maxlength' => true]);
    }elseif($model->type == 'image'){
        if(!empty($model->value)){
            ?><div class="prev-img"><img src="<?php echo '/uploads/options/'.$model->value; ?>"></div><?php
            $path = Yii::$app->params['base_dir'] . '/uploads/options/'.$model->value;
            echo $form->field($model, 'imageFile')->fileInput(['value' => $path]);
        }else {
            echo $form->field($model, 'imageFile')->fileInput();
        }
    } ?>
    <?= $form->field($model, 'type')->dropDownList([ 'text' => 'Text', 'textarea' => 'Textarea', 'image' => 'Image']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
