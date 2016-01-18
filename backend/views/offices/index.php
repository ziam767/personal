<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OfficesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สำนัก/กอง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offices-index">

   
    
    

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">

                <?= Html::a('<span class="fa fa-plus-circle"></span> เพิ่ม', ['create'], ['class' => 'btn']) ?>

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
             <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'office_id',
            'office_name',
            'office_name_en',
            'department_id',
            'office_address:ntext',
            // 'office_position:ntext',
            // 'office_tel',
            // 'office_fax',
            'office_email:email',
            // 'office_logo',
            // 'office_status',
            // 'office_updated',
            // 'office_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div><!-- /.box-body -->
    </div>


</div>
