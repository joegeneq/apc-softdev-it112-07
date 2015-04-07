<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "batch".
 *
 * @property integer $id
 * @property integer $batch_code
 * @property string $batch_created_date
 * @property integer $alumni_id
 *
 * @property Alumni $alumni
 */
class batch extends \yii\db\ActiveRecord
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
            [['batch_code', 'alumni_id'], 'integer'],
            [['batch_created_date'], 'safe']
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
}
