<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $user_name
 * @property string $user_password
 * @property string $user_type
 * @property string $user_lname
 * @property string $user_fname
 * @property string $user_mname
 * @property string $user_gender
 * @property string $user_birthdate
 * @property string $user_marital_stat
 * @property string $user_address
 * @property string $user_mobile
 * @property string $user_landline
 * @property string $user_email
 * @property string $user_photo
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, user_password, user_type, user_lname, user_fname, user_mname, user_gender, user_birthdate, user_marital_stat, user_address, user_mobile, user_landline, user_email, user_photo', 'required'),
			array('user_name, user_password, user_lname, user_fname, user_mname, user_address, user_email', 'length', 'max'=>45),
			array('user_type', 'length', 'max'=>7),
			array('user_gender', 'length', 'max'=>6),
			array('user_marital_stat, user_landline', 'length', 'max'=>10),
			array('user_mobile', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_name, user_password, user_type, user_lname, user_fname, user_mname, user_gender, user_birthdate, user_marital_stat, user_address, user_mobile, user_landline, user_email, user_photo', 'safe', 'on'=>'search'),
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
			'user_name' => 'User Name',
			'user_password' => 'User Password',
			'user_type' => 'User Type',
			'user_lname' => 'User Lname',
			'user_fname' => 'User Fname',
			'user_mname' => 'User Mname',
			'user_gender' => 'User Gender',
			'user_birthdate' => 'User Birthdate',
			'user_marital_stat' => 'User Marital Stat',
			'user_address' => 'User Address',
			'user_mobile' => 'User Mobile',
			'user_landline' => 'User Landline',
			'user_email' => 'User Email',
			'user_photo' => 'User Photo',
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
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_lname',$this->user_lname,true);
		$criteria->compare('user_fname',$this->user_fname,true);
		$criteria->compare('user_mname',$this->user_mname,true);
		$criteria->compare('user_gender',$this->user_gender,true);
		$criteria->compare('user_birthdate',$this->user_birthdate,true);
		$criteria->compare('user_marital_stat',$this->user_marital_stat,true);
		$criteria->compare('user_address',$this->user_address,true);
		$criteria->compare('user_mobile',$this->user_mobile,true);
		$criteria->compare('user_landline',$this->user_landline,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_photo',$this->user_photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
