<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?= $form->field($model, 'Celular') ?>

    <?= $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Encargado') ?>

    <?php // echo $form->field($model, 'NRif') ?>

    <?php // echo $form->field($model, 'CRif') ?>

    <?php // echo $form->field($model, 'Siglas') ?>

    <?php // echo $form->field($model, 'Contador') ?>

    <?php // echo $form->field($model, 'Codigo_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('models', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('models', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
