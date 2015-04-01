<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mission".
 *
 * @property integer $id
 * @property integer $mission_name
 * @property integer $mission_desc
 * @property integer $mission_num_of_volunteer_needed
 * @property integer $mission_location
 * @property integer $mission_contact_person_lname
 * @property integer $mission_contact_person_fname
 * @property integer $mission_contact_num
 * @property integer $mission_email_address
 */
class Mission extends \yii\db\ActiveRecord
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
            [['id', 'mission_name', 'mission_desc', 'mission_num_of_volunteer_needed', 'mission_location', 'mission_contact_person_lname', 'mission_contact_person_fname', 'mission_contact_num', 'mission_email_address'], 'required'],
            [['id', 'mission_name', 'mission_desc', 'mission_num_of_volunteer_needed', 'mission_location', 'mission_contact_person_lname', 'mission_contact_person_fname', 'mission_contact_num', 'mission_email_address'], 'integer']
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
            'mission_contact_person_lname' => 'Mission Contact Person Lname',
            'mission_contact_person_fname' => 'Mission Contact Person Fname',
            'mission_contact_num' => 'Mission Contact Num',
            'mission_email_address' => 'Mission Email Address',
        ];
    }
}
