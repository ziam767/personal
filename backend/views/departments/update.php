<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Departments */

$this->title = 'แก้ไข: ' . ' ' . $model->department_id;
$this->params['breadcrumbs'][] = ['label' => 'สังกัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->department_name, 'url' => ['view', 'id' => $model->department_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="departments-update">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">

                <?= Html::a('<span class="fa fa-plus-circle"></span> เพิ่ม', ['create'], ['class' => 'btn']) ?>
                <?= Html::a('<span class="fa fa-edit"></span> แก้ไข', ['update', 'id' => $model->department_id], ['class' => 'btn btn']) ?>

                <?=
                Html::a('<span class="fa  fa-trash-o"></span> ลบ', ['delete', 'id' => $model->department_id], [
                    'class' => 'btn',
                    'data' => [
                        'confirm' => 'คุณต้องการลบข้อมูลใช่ไหม?',
                        'method' => 'post',
                    ],
                ])
                ?>

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div><!-- /.box-body -->
    </div>

</div>
