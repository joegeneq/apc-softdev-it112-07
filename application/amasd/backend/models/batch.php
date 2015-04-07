<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "batch".
 *
 * @property integer $id
 * @property integer $batch_code
 * @property string $batch_created_date
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
            [['batch_code', 'batch_created_date'], 'required'],
            [['batch_code'], 'integer'],
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
        ];
    }
}
