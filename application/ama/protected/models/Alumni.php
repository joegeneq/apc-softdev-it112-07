<?php

/**
 * This is the model class for table "alumni".
 *
 * The followings are the available columns in table 'alumni':
 * @property integer $id
 * @property string $alumni_lname
 * @property string $alumni_fname
 * @property string $alumni_mname
 * @property string $alumni_gender
 * @property string $alumni_birthdate
 * @property string $alumni_marital_stat
 * @property string $alumni_address
 * @property string $alumni_mobile
 * @property string $alumni_landline
 * @property string $alumni_email
 * @property string $alumni_photo
 */
class Alumni extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alumni_lname, alumni_fname, alumni_mname, alumni_gender, alumni_birthdate, alumni_marital_stat, alumni_address, alumni_mobile, alumni_landline, alumni_email, alumni_photo', 'required'),
			array('alumni_lname, alumni_fname, alumni_mname, alumni_address, alumni_email', 'length', 'max'=>45),
			array('alumni_gender', 'length', 'max'=>6),
			array('alumni_marital_stat, alumni_landline', 'length', 'max'=>10),
			array('alumni_mobile', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, alumni_lname, alumni_fname, alumni_mname, alumni_gender, alumni_birthdate, alumni_marital_stat, alumni_address, alumni_mobile, alumni_landline, alumni_email, alumni_photo', 'safe', 'on'=>'search'),
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
			'alumni_lname' => 'Alumni Lname',
			'alumni_fname' => 'Alumni Fname',
			'alumni_mname' => 'Alumni Mname',
			'alumni_gender' => 'Alumni Gender',
			'alumni_birthdate' => 'Alumni Birthdate',
			'alumni_marital_stat' => 'Alumni Marital Stat',
			'alumni_address' => 'Alumni Address',
			'alumni_mobile' => 'Alumni Mobile',
			'alumni_landline' => 'Alumni Landline',
			'alumni_email' => 'Alumni Email',
			'alumni_photo' => 'Alumni Photo',
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
		$criteria->compare('alumni_lname',$this->alumni_lname,true);
		$criteria->compare('alumni_fname',$this->alumni_fname,true);
		$criteria->compare('alumni_mname',$this->alumni_mname,true);
		$criteria->compare('alumni_gender',$this->alumni_gender,true);
		$criteria->compare('alumni_birthdate',$this->alumni_birthdate,true);
		$criteria->compare('alumni_marital_stat',$this->alumni_marital_stat,true);
		$criteria->compare('alumni_address',$this->alumni_address,true);
		$criteria->compare('alumni_mobile',$this->alumni_mobile,true);
		$criteria->compare('alumni_landline',$this->alumni_landline,true);
		$criteria->compare('alumni_email',$this->alumni_email,true);
		$criteria->compare('alumni_photo',$this->alumni_photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumni the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
