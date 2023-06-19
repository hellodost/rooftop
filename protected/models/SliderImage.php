<?php

/**
 * This is the model class for table "slider_image".
 *
 * The followings are the available columns in table 'slider_image':
 * @property integer $id
 * @property string $image_one
 * @property string $image_two
 * @property string $image_three
 * @property string $image_four
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class SliderImage extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'slider_image';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('image_one, image_two, image_three, image_four, year, month', 'required'),
            array('image_one,image_two,image_three,image_four', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('year, month', 'numerical', 'integerOnly' => true),
            array('image_one, image_two, image_three, image_four', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, image_one, image_two, image_three, image_four, year, month, created_on', 'safe', 'on' => 'search'),
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
            'id' => 'ID',
            'image_one' => 'Slider One',
            'image_two' => 'Slider Two',
            'image_three' => 'Slider Three',
            'image_four' => 'Slider Four',
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

        $criteria->compare('id', $this->id);
        $criteria->compare('image_one', $this->image_one, true);
        $criteria->compare('image_two', $this->image_two, true);
        $criteria->compare('image_three', $this->image_three, true);
        $criteria->compare('image_four', $this->image_four, true);
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
     * @return SliderImage the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
