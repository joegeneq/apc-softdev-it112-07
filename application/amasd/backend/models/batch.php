<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "batch".
 *
 * @property integer $id
 * @property string $batch_code
 * @property string $batch_created_date
 * @property integer $alumni_id
 *
 * @property Alumni $alumni
 * @property Mission[] $missions
 */
class Batch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'batch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['batch_code', 'batch_created_date', 'alumni_id'], 'required'],
            [['batch_created_date'], 'safe'],
            [['alumni_id'], 'integer'],
            [['batch_code'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'batch_code' => 'Batch Code',
            'batch_created_date' => 'Batch Created Date',
            'alumni_id' => 'Alumni ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumni()
    {
        return $this->hasOne(Alumni::className(), ['id' => 'alumni_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissions()
    {
        return $this->hasMany(Mission::className(), ['batch_id' => 'id']);
    }
}
