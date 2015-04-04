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
 * @property string $alumni_school_year_graduated
 * @property string $alumni_school_address
 * @property integer $alumni_school_contact_num
 * @property resource $alumni_photo
 * @property string $alumni_father_name
 * @property string $alumni_father_address
 * @property string $alumni_father_occupation
 * @property integer $alumni_father_contact_num
 * @property string $alumni_mother_name
 * @property string $alumni_mother_address
 * @property string $alumni_mother_occupation
 * @property integer $alumni_mother_contact_num
 * @property integer $alumni_num_siblings
 * @property string $alumni_spouse
 * @property integer $alumni_num_children
 */
class alumni extends \yii\db\ActiveRecord
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
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_gender', 'alumni_birthdate', 'alumni_nationality', 'alumni_occupation', 'alumni_marital_stat', 'alumni_address', 'alumni_mobile', 'alumni_landline', 'alumni_email', 'alumni_school_graduated_from', 'alumni_school_year_graduated', 'alumni_school_address', 'alumni_school_contact_num', 'alumni_photo', 'alumni_father_name', 'alumni_father_address', 'alumni_father_occupation', 'alumni_father_contact_num', 'alumni_mother_name', 'alumni_mother_address', 'alumni_mother_occupation', 'alumni_mother_contact_num', 'alumni_num_siblings', 'alumni_spouse', 'alumni_num_children'], 'required'],
            [['alumni_birthdate'], 'safe'],
            [['alumni_school_contact_num', 'alumni_father_contact_num', 'alumni_mother_contact_num', 'alumni_num_siblings', 'alumni_num_children'], 'integer'],
            [['alumni_photo'], 'string'],
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_nationality', 'alumni_occupation', 'alumni_address', 'alumni_email', 'alumni_school_graduated_from', 'alumni_school_year_graduated', 'alumni_school_address', 'alumni_father_name', 'alumni_father_address', 'alumni_father_occupation', 'alumni_mother_name', 'alumni_mother_address', 'alumni_mother_occupation', 'alumni_spouse'], 'string', 'max' => 45],
            [['alumni_gender'], 'string', 'max' => 6],
            [['alumni_marital_stat', 'alumni_landline'], 'string', 'max' => 10],
            [['alumni_mobile'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alumni_lname' => 'Last Name',
            'alumni_fname' => 'First Name',
            'alumni_mname' => 'Middle Name',
            'alumni_gender' => 'Gender',
            'alumni_birthdate' => 'Birthday',
            'alumni_nationality' => 'Nationality',
            'alumni_occupation' => 'Occupation',
            'alumni_marital_stat' => 'Marital Status',
            'alumni_address' => 'Home Address',
            'alumni_mobile' => 'Mobile Number',
            'alumni_landline' => 'Landline Number',
            'alumni_email' => 'Email Address',
            'alumni_school_graduated_from' => 'School Graduated From',
            'alumni_school_year_graduated' => 'School Year Graduated',
            'alumni_school_address' => 'School Address',
            'alumni_school_contact_num' => 'School Contact Number',
            'alumni_photo' => 'Photo',
            'alumni_father_name' => 'Name of Father',
            'alumni_father_address' => 'Address of Father',
            'alumni_father_occupation' => 'Occupation of Father',
            'alumni_father_contact_num' => 'Contact Number of Father',
            'alumni_mother_name' => 'Name of Mother',
            'alumni_mother_address' => 'Address of Mother',
            'alumni_mother_occupation' => 'Occupation of Mother',
            'alumni_mother_contact_num' => 'Contact Number of Mother',
            'alumni_num_siblings' => 'Number of Siblings',
            'alumni_spouse' => 'Spouse',
            'alumni_num_children' => 'Number of Children',
        ];
    }
}
