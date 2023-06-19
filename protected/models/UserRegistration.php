<?php

/**
 * This is the model class for table "userregistration".
 *
 * The followings are the available columns in table 'userregistration':
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property string $pass
 * @property string $created_on
 */
class Userregistration extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    private $_identity;

    public function tableName() {
        return 'userregistration';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fname, lname, email, pass, created_on', 'required', 'on' => 'signup'),
            array('email, pass', 'required', 'on' => 'login'),
            array('fname, lname, email, pass', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('user_id, fname, lname, email, pass, created_on', 'safe', 'on' => 'search'),
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
            'user_id' => 'User',
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'E- Mail Address',
            'pass' => 'Password',
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

        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('fname', $this->fname, true);
        $criteria->compare('lname', $this->lname, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('pass', $this->pass, true);
        $criteria->compare('created_on', $this->created_on, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Userregistration the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function authenticate($attribute, $params) {
        print_r($this->hasErrors());
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->email, $this->password);
            if (!$this->_identity->authenticate())
                $this->addError('password', 'Incorrect email or password.');
        }
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login() {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->email, $this->password);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else
            return false;
    }

}
