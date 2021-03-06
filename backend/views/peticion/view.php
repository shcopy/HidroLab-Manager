<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Peticion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Peticions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peticion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'id' => $model->id, 'Referencia_id' => $model->Referencia_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'id' => $model->id, 'Referencia_id' => $model->Referencia_id, 'General_id' => $model->General_id, 'Muestras_id' => $model->Muestras_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('models', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fPeticion',
            'cadena',
            'fVencimiento',
            'fCreacion',
            'Referencia_id',
            'General_id',
            'Muestras_id',
            'Costos_id',
            'Reporte_id',
        ],
    ]) ?>

</div>
