<?php

/**
 * This is the model class for table "media_news".
 *
 * The followings are the available columns in table 'media_news':
 * @property integer $med_id
 * @property string $med_pic
 * @property string $med_des
 * @property string $publish_date
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class MediaNews extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'media_news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('med_pic, med_des, publish_date, year, month', 'required'),
			array('year, month', 'numerical', 'integerOnly'=>true),
			array('med_pic, med_des, publish_date', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('med_id, med_pic, med_des, publish_date, year, month, created_on', 'safe', 'on'=>'search'),
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
			'med_id' => 'Med',
			'med_pic' => 'Media Photo',
			'med_des' => 'Media Description',
			'publish_date' => 'Publish Date',
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

		$criteria->compare('med_id',$this->med_id);
		$criteria->compare('med_pic',$this->med_pic,true);
		$criteria->compare('med_des',$this->med_des,true);
		$criteria->compare('publish_date',$this->publish_date,true);
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
	 * @return MediaNews the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
