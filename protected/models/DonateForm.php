<?php

/**
 * This is the model class for table "donate_form".
 *
 * The followings are the available columns in table 'donate_form':
 * @property integer $don_id
 * @property integer $user_id
 * @property string $reservation_name
 * @property string $reservation_email
 * @property integer $reservation_phone
 * @property string $person_select
 * @property string $date
 * @property string $form_detail
 * @property string $reservation_pan
 * @property integer $reservation_amount
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class DonateForm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'donate_form';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reservation_name, reservation_email, reservation_phone, person_select, date, form_detail, reservation_pan, reservation_amount', 'required'),
			array('user_id, reservation_phone, reservation_amount, year, month', 'numerical', 'integerOnly'=>true),
			array('reservation_name, reservation_email, form_detail, reservation_pan', 'length', 'max'=>100),
			array('person_select', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('don_id, user_id, reservation_name, reservation_email, reservation_phone, person_select, date, form_detail, reservation_pan, reservation_amount, year, month, created_on', 'safe', 'on'=>'search'),
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
			'don_id' => 'Don',
			'user_id' => 'User',
			'reservation_name' => 'Full Name',
			'reservation_email' => 'Email',
			'reservation_phone' => 'Phone No.',
			'person_select' => 'Person Select',
			'date' => 'Date',
			'form_detail' => 'Detail',
			'reservation_pan' => 'Pan No.',
			'reservation_amount' => 'Amount',
			'year' => 'Year',
			'month' => 'Month',
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

		$criteria->compare('don_id',$this->don_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('reservation_name',$this->reservation_name,true);
		$criteria->compare('reservation_email',$this->reservation_email,true);
		$criteria->compare('reservation_phone',$this->reservation_phone);
		$criteria->compare('person_select',$this->person_select,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('form_detail',$this->form_detail,true);
		$criteria->compare('reservation_pan',$this->reservation_pan,true);
		$criteria->compare('reservation_amount',$this->reservation_amount);
		$criteria->compare('year',$this->year);
		$criteria->compare('month',$this->month);
		$criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DonateForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
