<?php

/**
 * This is the model class for table "contact_us".
 *
 * The followings are the available columns in table 'contact_us':
 * @property integer $con_id
 * @property string $name
 * @property string $email
 * @property string $age
 * @property string $phoneno
 * @property string $message
 * @property integer $month
 * @property integer $year
 * @property string $created_on
 */
class ContactUs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact_us';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, age, phoneno, message, month, year', 'required'),
			array('month, year', 'numerical', 'integerOnly'=>true),
			array('name, email, age, phoneno', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('con_id, name, email, age, phoneno, message, month, year, created_on', 'safe', 'on'=>'search'),
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
			'con_id' => 'Con',
			'name' => 'नाम',
			'email' => 'ईमेल',
			'age' => 'उम्र',
			'phoneno' => 'फोन नंबर',
			'message' => 'मैसेज',
			'month' => 'Month',
			'year' => 'Year',
			'created_on' => 'Created On',
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

		$criteria->compare('con_id',$this->con_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('phoneno',$this->phoneno,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('month',$this->month);
		$criteria->compare('year',$this->year);
		$criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContactUs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
