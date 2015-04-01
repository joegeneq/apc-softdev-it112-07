<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mission".
 *
 * @property integer $id
 * @property string $mission_name
 * @property string $mission_desc
 * @property string $mission_num_of_volunteer_needed
 * @property string $mission_location
 * @property string $mission_contact_person_fname
 * @property string $mission_contact_person_lname
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
            [['mission_name', 'mission_desc', 'mission_num_of_volunteer_needed', 'mission_location', 'mission_contact_person_fname', 'mission_contact_person_lname', 'mission_contact_num', 'mission_email_address'], 'required'],
            [['mission_name', 'mission_desc', 'mission_num_of_volunteer_needed', 'mission_location', 'mission_contact_person_fname', 'mission_contact_person_lname', 'mission_contact_num', 'mission_email_address'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mission_name' => 'Mission Name',
            'mission_desc' => 'Mission Desc',
            'mission_num_of_volunteer_needed' => 'Mission Num Of Volunteer Needed',
            'mission_location' => 'Mission Location',
            'mission_contact_person_fname' => 'Mission Contact Person Fname',
            'mission_contact_person_lname' => 'Mission Contact Person Lname',
            'mission_contact_num' => 'Mission Contact Num',
            'mission_email_address' => 'Mission Email Address',
        ];
    }
}
