<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OfficesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="offices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'office_id') ?>

    <?= $form->field($model, 'office_name') ?>

    <?= $form->field($model, 'office_name_en') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'office_address') ?>

    <?php // echo $form->field($model, 'office_position') ?>

    <?php // echo $form->field($model, 'office_tel') ?>

    <?php // echo $form->field($model, 'office_fax') ?>

    <?php // echo $form->field($model, 'office_email') ?>

    <?php // echo $form->field($model, 'office_logo') ?>

    <?php // echo $form->field($model, 'office_status') ?>

    <?php // echo $form->field($model, 'office_updated') ?>

    <?php // echo $form->field($model, 'office_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
