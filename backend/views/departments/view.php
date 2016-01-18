<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Departments */

$this->title = $model->department_name;
$this->params['breadcrumbs'][] = ['label' => 'สังกัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-view">

     
<div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">

                <?= Html::a('<span class="fa fa-plus-circle"></span> เพิ่ม', ['create'], ['class' => 'btn']) ?>
                <?= Html::a('<span class="fa fa-edit"></span> แก้ไข', ['update', 'id' => $model->department_id], ['class' => 'btn btn']) ?>
       
                <?= Html::a('<span class="fa  fa-trash-o"></span> ลบ', ['delete', 'id' => $model->department_id], [
            'class' => 'btn',
            'data' => [
                'confirm' => 'คุณต้องการลบข้อมูลใช่ไหม?',
                'method' => 'post',
            ],
        ]) ?>

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
           
     <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'department_id',
            'department_name',
            'department_status:boolean',
            'department_ceated',
        ],
        
    ]) ?>
        </div><!-- /.box-body -->
    </div>
</div>
