<?php

/**
 * This is the model class for table "volunteer".
 *
 * The followings are the available columns in table 'volunteer':
 * @property integer $id
 * @property string $v_lname
 * @property string $v_fname
 * @property string $v_mname
 * @property string $v_gender
 * @property string $v_birthdate
 * @property string $v_marital_status
 * @property string $v_address
 * @property string $v_mobile
 * @property string $v_landline
 * @property string $v_email
 * @property string $v_photo
 */
class Volunteer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'volunteer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('v_lname, v_fname, v_mname, v_gender, v_birthdate, v_marital_status, v_address, v_mobile, v_landline, v_email, v_photo', 'required'),
			array('v_lname, v_fname, v_mname, v_address, v_email', 'length', 'max'=>45),
			array('v_gender', 'length', 'max'=>6),
			array('v_marital_status, v_landline', 'length', 'max'=>10),
			array('v_mobile', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, v_lname, v_fname, v_mname, v_gender, v_birthdate, v_marital_status, v_address, v_mobile, v_landline, v_email, v_photo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'v_lname' => 'V Lname',
			'v_fname' => 'V Fname',
			'v_mname' => 'V Mname',
			'v_gender' => 'V Gender',
			'v_birthdate' => 'V Birthdate',
			'v_marital_status' => 'V Marital Status',
			'v_address' => 'V Address',
			'v_mobile' => 'V Mobile',
			'v_landline' => 'V Landline',
			'v_email' => 'V Email',
			'v_photo' => 'V Photo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('v_lname',$this->v_lname,true);
		$criteria->compare('v_fname',$this->v_fname,true);
		$criteria->compare('v_mname',$this->v_mname,true);
		$criteria->compare('v_gender',$this->v_gender,true);
		$criteria->compare('v_birthdate',$this->v_birthdate,true);
		$criteria->compare('v_marital_status',$this->v_marital_status,true);
		$criteria->compare('v_address',$this->v_address,true);
		$criteria->compare('v_mobile',$this->v_mobile,true);
		$criteria->compare('v_landline',$this->v_landline,true);
		$criteria->compare('v_email',$this->v_email,true);
		$criteria->compare('v_photo',$this->v_photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Volunteer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
