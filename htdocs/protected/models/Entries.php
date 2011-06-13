<?php

/**
 * This is the model class for table "Entries".
 *
 * The followings are the available columns in table 'Entries':
 * @property string $id
 * @property string $subject
 * @property string $body
 * @property string $createdOn
 * @property string $createdByUser
 * @property string $createdForUser
 * @property integer $isGroupEntry
 * @property string $createdForGroup
 */
class Entries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Entries the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Entries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('body, createdOn', 'required'),
			array('isGroupEntry', 'numerical', 'integerOnly'=>true),
			array('subject', 'length', 'max'=>254),
			array('createdByUser, createdForUser, createdForGroup', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, subject, body, createdOn, createdByUser, createdForUser, isGroupEntry, createdForGroup', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'subject' => 'Subject',
			'body' => 'Body',
			'createdOn' => 'Created On',
			'createdByUser' => 'Created By User',
			'createdForUser' => 'Created For User',
			'isGroupEntry' => 'Is Group Entry',
			'createdForGroup' => 'Created For Group',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('createdOn',$this->createdOn,true);
		$criteria->compare('createdByUser',$this->createdByUser,true);
		$criteria->compare('createdForUser',$this->createdForUser,true);
		$criteria->compare('isGroupEntry',$this->isGroupEntry);
		$criteria->compare('createdForGroup',$this->createdForGroup,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
        
        public function beforeValidate() {
            $this->createdOn = date('Y-m-d H:i');
            return parent::beforeValidate();
        }
}