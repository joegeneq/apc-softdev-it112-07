<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "volunteer".
 *
 * @property integer $id
 * @property string $volunteer_status
 * @property string $volunteer_code
 * @property string $volunteer_fname
 * @property string $volunteer_lname
 * @property string $volunteer_mname
 * @property string $volunteer_bdate
 * @property string $volunteer_age
 * @property string $volunteer_school_graduated
 * @property string $volunteer_year_graduated
 * @property string $volunteer_address
 * @property string $volunteer_contact_num
 * @property string $volunteer_start_date
 * @property integer $batch_id
 *
 * @property Alumni[] $alumnis
 * @property Batch $batch
 * @property VolunteerHasMission $volunteerHasMission
 * @property Mission[] $missions
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['volunteer_status', 'volunteer_code', 'volunteer_fname', 'volunteer_lname', 'volunteer_mname', 'volunteer_bdate', 'volunteer_age', 'volunteer_school_graduated', 'volunteer_year_graduated', 'volunteer_address', 'volunteer_contact_num', 'volunteer_start_date', 'batch_id'], 'required'],
            [['volunteer_start_date'], 'safe'],
            [['batch_id'], 'integer'],
            [['volunteer_status', 'volunteer_code', 'volunteer_fname', 'volunteer_lname', 'volunteer_mname', 'volunteer_bdate', 'volunteer_age', 'volunteer_school_graduated', 'volunteer_year_graduated', 'volunteer_address', 'volunteer_contact_num'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'volunteer_status' => 'Volunteer Status',
            'volunteer_code' => 'Volunteer Code',
            'volunteer_fname' => 'Volunteer Fname',
            'volunteer_lname' => 'Volunteer Lname',
            'volunteer_mname' => 'Volunteer Mname',
            'volunteer_bdate' => 'Volunteer Bdate',
            'volunteer_age' => 'Volunteer Age',
            'volunteer_school_graduated' => 'Volunteer School Graduated',
            'volunteer_year_graduated' => 'Volunteer Year Graduated',
            'volunteer_address' => 'Volunteer Address',
            'volunteer_contact_num' => 'Volunteer Contact Num',
            'volunteer_start_date' => 'Volunteer Start Date',
            'batch_id' => 'Batch ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnis()
    {
        return $this->hasMany(Alumni::className(), ['volunteer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatch()
    {
        return $this->hasOne(Batch::className(), ['id' => 'batch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerHasMission()
    {
        return $this->hasOne(VolunteerHasMission::className(), ['volunteer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissions()
    {
        return $this->hasMany(Mission::className(), ['id' => 'mission_id'])->viaTable('volunteer_has_mission', ['volunteer_id' => 'id']);
    }
}
