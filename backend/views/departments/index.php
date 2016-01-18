<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สังกัด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">




    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">

                <?= Html::a('<span class="fa fa-plus-circle"></span> เพิ่ม', ['create'], ['class' => 'btn']) ?>

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'department_id',
                    'department_name',
                    
                    //'department_ceated',
                    [
                        'attribute'=>'department_status',
                        'contentOptions' => ['class'=>'text-center'],
                        'content'=>function($data){
                            $status = [ '1'=>'<label class="label label-success">ใช้งาน</label>',
                                        '0'=>'<label class="label label-danger">ไม่ใช้งาน</label>'                             
                                ];
                             return $status[$data->department_status];
                        }
                    ],
        
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template'=> '{view} {active} {inactive}',
                        
                        'contentOptions' => ['class'=>'text-center']
                        
                    ],
                ],
            ]);
            ?>
        </div><!-- /.box-body -->
    </div>

</div>
