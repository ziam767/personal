<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "offices".
 *
 * @property integer $office_id
 * @property string $office_name
 * @property string $office_name_en
 * @property integer $department_id
 * @property string $office_address
 * @property string $office_position
 * @property string $office_tel
 * @property string $office_fax
 * @property string $office_email
 * @property string $office_logo
 * @property string $office_status
 * @property string $office_updated
 * @property string $office_created
 *
 * @property Employees[] $employees
 * @property Groups $groups
 * @property Departments $department
 */
class Offices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['office_name', 'office_name_en', 'department_id', 'office_address', 'office_position', 'office_tel', 'office_fax', 'office_email', 'office_logo', 'office_status'], 'required'],
            [['department_id'], 'integer'],
            [['office_address', 'office_position', 'office_status'], 'string'],
            [['office_updated', 'office_created'], 'safe'],
            [['office_name', 'office_name_en'], 'string', 'max' => 255],
            [['office_tel', 'office_fax'], 'string', 'max' => 50],
            [['office_email', 'office_logo'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'office_id' => 'Office ID',
            'office_name' => 'ชื่อ (ภาษาไทย)',
            'office_name_en' => 'ชื่อ (ภาษาอังกฤษ)',
            'department_id' => 'สังกัด',
            'office_address' => 'ที่อยู่',
            'office_position' => 'ตำแหน่งที่ตั้ง',
            'office_tel' => 'เบอร์โทร',
            'office_fax' => 'Fax',
            'office_email' => 'E-mail',
            'office_logo' => 'Logo',
            'office_status' => 'สถานะ',
            'office_updated' => 'แก้ไข',
            'office_created' => 'สร้าง',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employees::className(), ['office_id' => 'office_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasOne(Groups::className(), ['group_id' => 'office_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Departments::className(), ['department_id' => 'department_id']);
    }
}
