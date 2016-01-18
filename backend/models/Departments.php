<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property integer $department_id
 * @property string $department_name
 * @property string $department_status
 * @property string $department_ceated
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_name', 'department_status'], 'required'],
            [['department_status'], 'string'],
            [['department_ceated'], 'safe'],
            [['department_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'department_name' => 'ชื่อสังกัด',
            'department_status' => 'สถานะ',
            'department_ceated' => 'สร้างเมื่อ',
        ];
    }
}
