<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property integer $id
 * @property string $area_location
 * @property string $area_supervisor
 * @property integer $area_contactnum
 *
 * @property Mission[] $missions
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_location', 'area_supervisor', 'area_contactnum'], 'required'],
            [['area_contactnum'], 'integer'],
            [['area_location', 'area_supervisor'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area_location' => 'Area Location',
            'area_supervisor' => 'Area Supervisor',
            'area_contactnum' => 'Area Contactnum',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissions()
    {
        return $this->hasMany(Mission::className(), ['area_id' => 'id']);
    }
}
