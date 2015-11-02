<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GeneralHasTipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="general-has-tipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'General_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipo_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('models', 'Create') : Yii::t('models', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
