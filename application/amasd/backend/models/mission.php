<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mission".
 *
 * @property integer $id
 * @property string $mission_location
 * @property string $mission_length
 * @property string $mission_start_date
 * @property string $mission_end_date
 * @property string $mission_status
 * @property integer $alumni_id
 *
 * @property Alumni $alumni
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
            [['mission_location', 'mission_length', 'mission_start_date', 'mission_end_date', 'mission_status', 'alumni_id'], 'required'],
            [['mission_start_date', 'mission_end_date'], 'safe'],
            [['alumni_id'], 'integer'],
            [['mission_location'], 'string', 'max' => 255],
            [['mission_length', 'mission_status'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mission_location' => 'Location',
            'mission_length' => 'Period',
            'mission_start_date' => 'Start Date',
            'mission_end_date' => 'End Date',
            'mission_status' => 'Status',
            'alumni_id' => 'Alumni',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumni()
    {
        return $this->hasOne(Alumni::className(), ['id' => 'alumni_id']);
    }
}
