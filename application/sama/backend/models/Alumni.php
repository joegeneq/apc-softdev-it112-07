<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alumni".
 *
 * @property integer $id
 * @property string $alumni_code
 * @property string $alumni_fname
 * @property string $alumni_lname
 * @property string $alumni_mname
 * @property string $alumn_bdate
 * @property string $alumni_age
 * @property string $alumni_school_graduated
 * @property string $alumni_year_graduated
 * @property string $alumni_address
 * @property string $alumni_contact_num
 * @property string $alumni_reg_date
 * @property string $alumni_occupation
 * @property string $alumni_company_name
 * @property string $alumni_company_contact_num
 * @property string $alumni_company_address
 * @property integer $admin_id
 * @property integer $volunteer_id
 *
 * @property Admin $admin
 * @property Volunteer $volunteer
 */
class Alumni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumni_code', 'alumni_fname', 'alumni_lname', 'alumni_mname', 'alumn_bdate', 'alumni_age', 'alumni_school_graduated', 'alumni_year_graduated', 'alumni_address', 'alumni_contact_num', 'alumni_reg_date', 'alumni_occupation', 'alumni_company_name', 'alumni_company_contact_num', 'alumni_company_address', 'admin_id'], 'required'],
            [['admin_id', 'volunteer_id'], 'integer'],
            [['alumni_code', 'alumni_fname', 'alumni_lname', 'alumni_mname', 'alumn_bdate', 'alumni_age', 'alumni_school_graduated', 'alumni_year_graduated', 'alumni_address', 'alumni_contact_num', 'alumni_reg_date', 'alumni_occupation', 'alumni_company_name', 'alumni_company_contact_num', 'alumni_company_address'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alumni_code' => 'Alumni Code',
            'alumni_fname' => 'Alumni Fname',
            'alumni_lname' => 'Alumni Lname',
            'alumni_mname' => 'Alumni Mname',
            'alumn_bdate' => 'Alumn Bdate',
            'alumni_age' => 'Alumni Age',
            'alumni_school_graduated' => 'Alumni School Graduated',
            'alumni_year_graduated' => 'Alumni Year Graduated',
            'alumni_address' => 'Alumni Address',
            'alumni_contact_num' => 'Alumni Contact Num',
            'alumni_reg_date' => 'Alumni Reg Date',
            'alumni_occupation' => 'Alumni Occupation',
            'alumni_company_name' => 'Alumni Company Name',
            'alumni_company_contact_num' => 'Alumni Company Contact Num',
            'alumni_company_address' => 'Alumni Company Address',
            'admin_id' => 'Admin ID',
            'volunteer_id' => 'Volunteer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteer()
    {
        return $this->hasOne(Volunteer::className(), ['id' => 'volunteer_id']);
    }
}
