<?php

/**
 * This is the model class for table "testimonal".
 *
 * The followings are the available columns in table 'testimonal':
 * @property integer $testi_id
 * @property string $image
 * @property string $description
 * @property string $name
 * @property string $branch
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class Testimonal extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'testimonal';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('image, description, name, branch, year, month', 'required'),
            array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'update'),
            array('year, month', 'numerical', 'integerOnly' => true),
            array('image', 'length', 'max' => 250),
            array('name', 'length', 'max' => 150),
            array('branch', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('testi_id, image, description, name, branch, year, month, created_on', 'safe', 'on' => 'search'),
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
            'testi_id' => 'Testi',
            'image' => 'Image',
            'description' => 'Description',
            'name' => 'Name',
            'branch' => 'Designation',
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

        $criteria->compare('testi_id', $this->testi_id);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('branch', $this->branch, true);
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
     * @return Testimonal the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
