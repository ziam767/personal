<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Departments */

$this->title = 'เพิ่ม';
$this->params['breadcrumbs'][] = ['label' => 'สังกัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-create">

  

    
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">

                <?= Html::a('<span class="fa fa-plus-circle"></span> เพิ่ม', ['create'], ['class' => 'btn']) ?>
               

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
           
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div><!-- /.box-body -->
    </div>

</div>
