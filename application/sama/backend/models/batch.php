<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "batch".
 *
 * @property integer $id
 * @property string $batch_code
 * @property string $batch_date
 *
 * @property Volunteer[] $volunteers
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
            [['batch_code', 'batch_date'], 'required'],
            [['batch_date'], 'safe'],
            [['batch_code'], 'string', 'max' => 45]
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
            'batch_date' => 'Batch Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteers()
    {
        return $this->hasMany(Volunteer::className(), ['batch_id' => 'id']);
    }
}
