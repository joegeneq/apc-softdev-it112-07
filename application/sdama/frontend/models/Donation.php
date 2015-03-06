<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "donation".
 *
 * @property integer $id
 * @property integer $donation_type
 * @property integer $donation_status
 * @property string $donation_date
 */
class Donation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['donation_type', 'donation_status', 'donation_date'], 'required'],
            [['donation_type', 'donation_status'], 'integer'],
            [['donation_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'donation_type' => 'Donation Type',
            'donation_status' => 'Donation Status',
            'donation_date' => 'Donation Date',
        ];
    }
}
