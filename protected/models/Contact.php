<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $id
 * @property string $contactFName
 * @property string $Contact_lname
 * @property string $Contact_Email
 * @property integer $phno
 * @property string $Contact_message
 */
class Contact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contactFName, Contact_lname, Contact_Email, phno, Contact_message', 'required'),
			array('phno', 'numerical', 'integerOnly'=>true),
			array('Contact_Email', 'length', 'max'=>100),
			array('Contact_Email', 'email'),
			array('Contact_message', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, contactFName, Contact_lname, Contact_Email, phno, Contact_message', 'safe', 'on'=>'search'),
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
			'contactFName' => ' First name',
			'Contact_lname' => ' Last name',
			'Contact_Email' => ' Email',
			'phno' => 'Phone Number',
			'Contact_message' => 'Message',
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
		$criteria->compare('contactFName',$this->contactFName,true);
		$criteria->compare('Contact_lname',$this->Contact_lname,true);
		$criteria->compare('Contact_Email',$this->Contact_Email,true);
		$criteria->compare('phno',$this->phno);
		$criteria->compare('Contact_message',$this->Contact_message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
