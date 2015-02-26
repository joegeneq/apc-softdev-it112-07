<?php

/**
 * This is the model class for table "mission".
 *
 * The followings are the available columns in table 'mission':
 * @property integer $id
 * @property string $mission_name
 * @property string $mission_description
 * @property integer $mission_num_of_volunteer_needed
 * @property string $mission_location
 * @property string $mission_contact_person_lname
 * @property string $mission_contact_person_fname
 * @property string $mission_contact_num
 * @property string $mission_email_address
 */
class Mission extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, mission_name, mission_description, mission_num_of_volunteer_needed, mission_location, mission_contact_person_lname, mission_contact_person_fname, mission_contact_num, mission_email_address', 'required'),
			array('id, mission_num_of_volunteer_needed', 'numerical', 'integerOnly'=>true),
			array('mission_name, mission_description, mission_contact_person_lname, mission_contact_person_fname', 'length', 'max'=>45),
			array('mission_location, mission_email_address', 'length', 'max'=>255),
			array('mission_contact_num', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mission_name, mission_description, mission_num_of_volunteer_needed, mission_location, mission_contact_person_lname, mission_contact_person_fname, mission_contact_num, mission_email_address', 'safe', 'on'=>'search'),
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
			'mission_name' => 'Mission Name',
			'mission_description' => 'Mission Description',
			'mission_num_of_volunteer_needed' => 'Mission Num Of Volunteer Needed',
			'mission_location' => 'Mission Location',
			'mission_contact_person_lname' => 'Mission Contact Person Lname',
			'mission_contact_person_fname' => 'Mission Contact Person Fname',
			'mission_contact_num' => 'Mission Contact Num',
			'mission_email_address' => 'Mission Email Address',
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
		$criteria->compare('mission_name',$this->mission_name,true);
		$criteria->compare('mission_description',$this->mission_description,true);
		$criteria->compare('mission_num_of_volunteer_needed',$this->mission_num_of_volunteer_needed);
		$criteria->compare('mission_location',$this->mission_location,true);
		$criteria->compare('mission_contact_person_lname',$this->mission_contact_person_lname,true);
		$criteria->compare('mission_contact_person_fname',$this->mission_contact_person_fname,true);
		$criteria->compare('mission_contact_num',$this->mission_contact_num,true);
		$criteria->compare('mission_email_address',$this->mission_email_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mission the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
