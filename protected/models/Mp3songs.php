<?php

/**
 * This is the model class for table "mp3songs".
 *
 * The followings are the available columns in table 'mp3songs':
 * @property integer $mp3_id
 * @property string $audiofile
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class Mp3songs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mp3songs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tittle,subtittle,tittle_two,subtittle_two,audiofile,audiofiles, year, month', 'required'),
                        array('audiofile','audiofiles', 'file','types'=>'mpeg,mp4,mp3', 'allowEmpty'=>true, 'on'=>'update'), 
			array('year, month', 'numerical', 'integerOnly'=>true),
			array('audiofile', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mp3_id, audiofile, year, month, created_on', 'safe', 'on'=>'search'),
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
			'mp3_id' => 'Mp3',
			'tittle' => 'Tittle',
                    'subtittle' => 'Subtittle',
                    'audiofile' => 'Mp3 Songs',
                    'tittle_two' => 'Tittle',
                    'subtittle_two' => 'Subtittle',
                    'audiofiles' => 'Mp3 Songs',
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

		$criteria->compare('mp3_id',$this->mp3_id);
		$criteria->compare('audiofile',$this->audiofile,true);
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
	 * @return Mp3songs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
