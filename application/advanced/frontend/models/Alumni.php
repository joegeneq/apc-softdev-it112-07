<?php

namespace frontend\models;

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
 * @property string $alumni_marital_stat
 * @property string $alumni_address
 * @property string $alumni_mobile
 * @property string $alumni_landline
 * @property string $alumni_email
 * @property resource $alumni_photo
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
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_gender', 'alumni_birthdate', 'alumni_marital_stat', 'alumni_address', 'alumni_mobile', 'alumni_landline', 'alumni_email', 'alumni_photo'], 'required'],
            [['alumni_birthdate'], 'safe'],
            [['alumni_photo'], 'string'],
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_address', 'alumni_email'], 'string', 'max' => 45],
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
            'alumni_lname' => 'Alumni Lname',
            'alumni_fname' => 'Alumni Fname',
            'alumni_mname' => 'Alumni Mname',
            'alumni_gender' => 'Alumni Gender',
            'alumni_birthdate' => 'Alumni Birthdate',
            'alumni_marital_stat' => 'Alumni Marital Stat',
            'alumni_address' => 'Alumni Address',
            'alumni_mobile' => 'Alumni Mobile',
            'alumni_landline' => 'Alumni Landline',
            'alumni_email' => 'Alumni Email',
            'alumni_photo' => 'Alumni Photo',
        ];
    }
}
