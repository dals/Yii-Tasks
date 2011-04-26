<?php

/**
 * This is the model class for table "Users".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $role
 * @property integer $isActive
 * @property Tasks[] $assignedTasks
 * @property Tasks[] $ownedTasks
 */
class Users extends CActiveRecord {

    public $_savedPassword;

    /**
     * Returns the static model of the specified AR class.
     * @return Users the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password', 'required', 'on' => 'login'),
            array('email, username, password', 'required', 'on' => 'insert'),
            array('isActive', 'numerical', 'integerOnly' => true),
            array('username, password', 'length', 'max' => 128),
            array('email', 'length', 'max' => 254),
            array('role', 'length', 'max' => 32),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, email, role, isActive', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'assignedTasks' => array(self::HAS_MANY, 'Tasks', 'assigneeId'),
            'ownedTasks' => array(self::HAS_MANY, 'Tasks', 'ownerId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'role' => 'Role',
            'isActive' => 'Is Active',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('role', $this->role, true);
        $criteria->compare('isActive', $this->isActive);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }

//    protected function beforeValidate() {
//       echo '<br>BW1:'.$this->password;
//        $this->password = md5($this->password);
//         echo '<br>BW2:'.$this->password;
//        return parent::beforeValidate();
//    }

    protected function beforeSave() {
        if ($this->_savedPassword !== $this->password) {
            $this->password = md5($this->password);
        }
        return parent::beforeSave();
    }

    protected function afterFind() {
        $this->_savedPassword = $this->password;
    }

}