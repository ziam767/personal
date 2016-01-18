<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Departments;

/* @var $this yii\web\View */
/* @var $model backend\models\Offices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="offices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'office_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'office_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'office_position')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'office_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_status')->dropDownList([ '0'=>'ไม่ใช้งาน', '1'=>'ใช้งาน', ], ['prompt' => '--เลือกสถานะ--']) ?>

    <?= $form->field($model, 'office_updated')->textInput() ?>

    <?= $form->field($model, 'office_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
