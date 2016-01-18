<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Offices */

$this->title = $model->office_name;
$this->params['breadcrumbs'][] = ['label' => 'สำนัก/กอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offices-view">
  
    
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
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'office_id',
            'office_name',
            'office_name_en',
            'department_id',
            'office_address:ntext',
            'office_position:ntext',
            'office_tel',
            'office_fax',
            'office_email:email',
            'office_logo',
            'office_status',
            'office_updated',
            'office_created',
        ],
    ]) ?>
        </div><!-- /.box-body -->
    </div>

</div>
