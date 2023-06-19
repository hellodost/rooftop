<?php

/**
 * This is the model class for table "job_apply".
 *
 * The followings are the available columns in table 'job_apply':
 * @property integer $job_id
 * @property string $form_name
 * @property string $form_email
 * @property string $form_sex
 * @property string $form_post
 * @property string $form_message
 * @property string $form_attachment
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class JobApply extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'job_apply';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('form_name, form_email, form_sex, form_post, form_message, form_attachment, year, month, created_on', 'required'),
			array('year, month', 'numerical', 'integerOnly'=>true),
			array('form_name', 'length', 'max'=>200),
			array('form_email, form_post', 'length', 'max'=>100),
			array('form_sex', 'length', 'max'=>50),
			array('form_attachment', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('job_id, form_name, form_email, form_sex, form_post, form_message, form_attachment, year, month, created_on', 'safe', 'on'=>'search'),
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
			'job_id' => 'Job',
			'form_name' => 'Form Name',
			'form_email' => 'Form Email',
			'form_sex' => 'Form Sex',
			'form_post' => 'Form Post',
			'form_message' => 'Form Message',
			'form_attachment' => 'Form Attachment',
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

		$criteria->compare('job_id',$this->job_id);
		$criteria->compare('form_name',$this->form_name,true);
		$criteria->compare('form_email',$this->form_email,true);
		$criteria->compare('form_sex',$this->form_sex,true);
		$criteria->compare('form_post',$this->form_post,true);
		$criteria->compare('form_message',$this->form_message,true);
		$criteria->compare('form_attachment',$this->form_attachment,true);
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
	 * @return JobApply the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
