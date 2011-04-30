<?php

/**
 * This is the model class for table "Contexts".
 *
 * The followings are the available columns in table 'Contexts':
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $createdBy
 * @property integer $isShared
 */
class Contexts extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return Contexts the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Contexts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, createdBy', 'required'),
            array('isShared', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 64),
            array('createdBy', 'length', 'max' => 11),
            array('description', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, description, createdBy, isShared', 'safe', 'on' => 'search'),
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
            'name' => 'Name',
            'description' => 'Description',
            'createdBy' => 'Created By',
            'isShared' => 'Is Shared',
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('createdBy', $this->createdBy, true);
        $criteria->compare('isShared', $this->isShared);

        return new CActiveDataProvider(get_class($this), array(
            'criteria' => $criteria,
        ));
    }
    
    protected function beforeSave() {

        return parent::beforeSave();
    }

    protected function beforeValidate() {
                $this->createdBy = Yii::app()->user->id;
        return parent::beforeValidate();
    }
}