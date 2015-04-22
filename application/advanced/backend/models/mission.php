<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mission".
 *
 * @property integer $id
 * @property integer $area_id
 * @property string $mission_length
 * @property string $mission_start_date
 * @property string $mission_end_date
 * @property string $mission_status
 * @property integer $batch_id
 *
 * @property Batch $batch
 * @property Area $area
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
            [['area_id', 'mission_length', 'mission_start_date', 'mission_end_date', 'mission_status', 'batch_id'], 'required'],
            [['area_id', 'batch_id'], 'integer'],
            [['mission_start_date', 'mission_end_date'], 'safe'],
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
            'area_id' => 'Area ID',
            'mission_length' => 'Mission Length',
            'mission_start_date' => 'Mission Start Date',
            'mission_end_date' => 'Mission End Date',
            'mission_status' => 'Mission Status',
            'batch_id' => 'Batch ID',
        ];
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
    public function getArea()
    {
        return $this->hasOne(Area::className(), ['id' => 'area_id']);
    }
}
