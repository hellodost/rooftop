<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $member_id
 * @property string $heading
 * @property string $member_name
 * @property string $member_address
 * @property string $member_mobile
 * @property string $reservation_amount
 * @property integer $date
 * @property string $created_on
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_name, member_address, member_mobile, reservation_amount,date', 'required'),
			array('date', 'numerical', 'integerOnly'=>true),
			array('heading, member_name, member_address, member_mobile, reservation_amount', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('member_id, heading, member_name, member_address, member_mobile, reservation_amount, date, created_on', 'safe', 'on'=>'search'),
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
			'member_id' => 'Member',
			'heading' => 'Heading',
			'member_name' => 'Member Name',
			'member_address' => 'Member Address',
			'member_mobile' => 'Member Mobile',
			'reservation_amount' => 'Reservation Amount',
			'date' => 'Date',
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

		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('heading',$this->heading,true);
		$criteria->compare('member_name',$this->member_name,true);
		$criteria->compare('member_address',$this->member_address,true);
		$criteria->compare('member_mobile',$this->member_mobile,true);
		$criteria->compare('reservation_amount',$this->reservation_amount,true);
		$criteria->compare('date',$this->date);
		$criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
