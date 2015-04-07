<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mission".
 *
 * @property integer $id
 * @property string $mission_num_of_volunteer
 * @property string $mission_location
 * @property string $mission_contact_person_lname
 * @property string $mission_contact_person_fname
 * @property string $mission_contact_num
 * @property string $mission_email_address
 */
class mission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mission_num_of_volunteer', 'mission_location', 'mission_contact_person_lname', 'mission_contact_person_fname', 'mission_contact_num', 'mission_email_address'], 'required'],
            [['mission_num_of_volunteer', 'mission_location', 'mission_contact_person_lname', 'mission_contact_person_fname'], 'string', 'max' => 45],
            [['mission_contact_num'], 'string', 'max' => 12],
            [['mission_email_address'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mission_num_of_volunteer' => 'Number of Volunteers',
            'mission_location' => 'Location',
            'mission_contact_person_lname' => 'Contact Person Last Name',
            'mission_contact_person_fname' => 'Contact Person First Name',
            'mission_contact_num' => 'Contact Number',
            'mission_email_address' => 'Email Address',
        ];
    }
}
