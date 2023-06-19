<?php

/**
 * This is the model class for table "upcoming_event".
 *
 * The followings are the available columns in table 'upcoming_event':
 * @property integer $event_id
 * @property string $photo
 * @property string $title
 * @property string $rel_date
 * @property string $des
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class upcoming_event extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'upcoming_event';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('photo, title, rel_date, des, year, month', 'required'),
            array('photo', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('year, month', 'numerical', 'integerOnly' => true),
            array('photo, title, rel_date, des', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('event_id, photo, title, rel_date, des, year, month, created_on', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'event_id' => 'Event',
            'photo' => 'Photo',
            'title' => 'Title',
            'rel_date' => 'Release Date',
            'des' => 'Description',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('event_id', $this->event_id);
        $criteria->compare('photo', $this->photo, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('rel_date', $this->rel_date, true);
        $criteria->compare('des', $this->des, true);
        $criteria->compare('year', $this->year);
        $criteria->compare('month', $this->month);
        $criteria->compare('created_on', $this->created_on, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return upcoming_event the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
