<?php

use kartik\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\address\Country $model
 */

$this->title = Yii::t($model->tableName(), 'Update a '.$model->modelTitle(1, false)) . ': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->modelTitle(2), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="country-update">

    <?= Html::pageHeader(Html::encode($this->title));?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>