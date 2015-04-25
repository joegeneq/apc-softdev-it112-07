<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alumni".
 *
 * @property integer $id
 * @property string $alumni_lname
 * @property string $alumni_fname
 * @property string $alumni_mname
 * @property string $alumni_gender
 * @property string $alumni_birthdate
 * @property string $alumni_nationality
 * @property string $alumni_occupation
 * @property string $alumni_marital_stat
 * @property string $alumni_address
 * @property string $alumni_mobile
 * @property string $alumni_landline
 * @property string $alumni_email
 * @property string $alumni_school_graduated_from
 * @property string $alumni_school_year_grad
 * @property string $alumni_school_address
 * @property integer $alumni_school_contact_num
 * @property string $alumni_father_name
 * @property string $alumni_father_address
 * @property string $alumni_father_occupation
 * @property string $alumni_father_contact_num
 * @property string $alumni_mother_name
 * @property string $alumni_mother_address
 * @property string $alumni_mother_occupation
 * @property string $alumni_mother_contact_num
 * @property integer $alumni_num_siblings
 * @property string $alumni_spouse
 * @property integer $alumni_num_children
 *
 * @property Batch[] $batches
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
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_gender', 'alumni_birthdate', 'alumni_nationality', 'alumni_occupation', 'alumni_marital_stat', 'alumni_address', 'alumni_mobile', 'alumni_email', 'alumni_school_graduated_from', 'alumni_school_year_grad', 'alumni_school_address', 'alumni_school_contact_num', 'alumni_father_name', 'alumni_father_address', 'alumni_mother_name', 'alumni_mother_address'], 'required'],
            [['alumni_birthdate', 'alumni_school_year_grad'], 'safe'],
            [['alumni_school_contact_num', 'alumni_num_siblings', 'alumni_num_children'], 'integer'],
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_nationality', 'alumni_occupation', 'alumni_address', 'alumni_email', 'alumni_school_graduated_from', 'alumni_school_address', 'alumni_father_name', 'alumni_father_address', 'alumni_father_occupation', 'alumni_mother_name', 'alumni_mother_address', 'alumni_mother_occupation', 'alumni_spouse'], 'string', 'max' => 45],
            [['alumni_gender'], 'string', 'max' => 6],
            [['alumni_marital_stat'], 'string', 'max' => 10],
            [['alumni_mobile', 'alumni_father_contact_num', 'alumni_mother_contact_num'], 'string', 'max' => 12],
            [['alumni_landline'], 'string', 'max' => 7]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alumni_lname' => 'Alumni Lname',
            'alumni_fname' => 'Alumni Fname',
            'alumni_mname' => 'Alumni Mname',
            'alumni_gender' => 'Alumni Gender',
            'alumni_birthdate' => 'Alumni Birthdate',
            'alumni_nationality' => 'Alumni Nationality',
            'alumni_occupation' => 'Alumni Occupation',
            'alumni_marital_stat' => 'Alumni Marital Stat',
            'alumni_address' => 'Alumni Address',
            'alumni_mobile' => 'Alumni Mobile',
            'alumni_landline' => 'Alumni Landline',
            'alumni_email' => 'Alumni Email',
            'alumni_school_graduated_from' => 'Alumni School Graduated From',
            'alumni_school_year_grad' => 'Alumni School Year Grad',
            'alumni_school_address' => 'Alumni School Address',
            'alumni_school_contact_num' => 'Alumni School Contact Num',
            'alumni_father_name' => 'Alumni Father Name',
            'alumni_father_address' => 'Alumni Father Address',
            'alumni_father_occupation' => 'Alumni Father Occupation',
            'alumni_father_contact_num' => 'Alumni Father Contact Num',
            'alumni_mother_name' => 'Alumni Mother Name',
            'alumni_mother_address' => 'Alumni Mother Address',
            'alumni_mother_occupation' => 'Alumni Mother Occupation',
            'alumni_mother_contact_num' => 'Alumni Mother Contact Num',
            'alumni_num_siblings' => 'Alumni Num Siblings',
            'alumni_spouse' => 'Alumni Spouse',
            'alumni_num_children' => 'Alumni Num Children',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatches()
    {
        return $this->hasMany(Batch::className(), ['alumni_id' => 'id']);
    }
}
