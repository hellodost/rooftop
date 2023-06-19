<?php

/**
 * This is the model class for table "video".
 *
 * The followings are the available columns in table 'video':
 * @property integer $vid_id
 * @property string $video
 * @property string $description
 * @property integer $year
 * @property integer $month
 * @property string $created_on
 */
class Video extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'video';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('video, description,publishtdate,image,detail,publish_date,images,details,pub_date, year, month', 'required'),
            array('video,image,images', 'file', 'types' => 'mp4, vlc, mov', 'allowEmpty' => true, 'on' => 'update'),
            array('year, month', 'numerical', 'integerOnly' => true),
            array('video, description,publishtdate,image,detail,publish_date,images,details,pub_date', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('vid_id, video, description,publishtdate,image,detail,publish_date,images,details,pub_date, year, month, created_on', 'safe', 'on' => 'search'),
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
            'vid_id' => 'Vid',
            'video' => 'Video1',
            'description' => 'Description1',
            'publishtdate' => 'Publish Date1',
            'image' => 'Video2',
            'detail' => 'Description2',
            'publish_date' => 'Publish Date2',
            'images' => 'Video3',
            'details' => 'Description3',
            'pub_date' => 'Publish Date3',
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

        $criteria->compare('vid_id', $this->vid_id);
        $criteria->compare('video', $this->video, true);
        $criteria->compare('description', $this->description, true);
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
     * @return Video the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
