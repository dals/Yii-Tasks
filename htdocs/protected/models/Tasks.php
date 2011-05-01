<?php

/**
 * This is the model class for table "Tasks".
 *
 * @property string $id
 * @property string $subject
 * @property string $body
 * @property string $status
 * @property integer $priority
 * @property string $createdOn
 * @property string $updatedOn
 * @property string $targetOn
 * @property string $repeatConditions
 * @property string $ownerId
 * @property string $assigneeId
 * @property string $assignedGroups
 * @property string $assignedUsers
 * @property string $contextId
 * @property string $blockedBy
 * @property Users $assignee
 * @property Contexts $context
 * @property Users $owner
 */
class Tasks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Tasks the static model class
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
		return 'Tasks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subject, createdOn, ownerId, assigneeId', 'required'),
			array('priority', 'numerical', 'integerOnly'=>true),
			array('subject, assignedUsers', 'length', 'max'=>254),
			array('status, repeatConditions, assignedGroups', 'length', 'max'=>128),
			array('ownerId, assigneeId, contextId, blockedBy', 'length', 'max'=>11),
			array('body, updatedOn, targetOn', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, subject, body, status, priority, createdOn, updatedOn, targetOn, repeatConditions, ownerId, assigneeId, assignedGroups, assignedUsers, contextId, blockedBy', 'safe', 'on'=>'search'),
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
			'assignee' => array(self::BELONGS_TO, 'Users', 'assigneeId'),
			'context' => array(self::BELONGS_TO, 'Contexts', 'contextId'),
			'owner' => array(self::BELONGS_TO, 'Users', 'ownerId'),
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
			'status' => 'Status',
			'priority' => 'Priority',
			'createdOn' => 'Created On',
			'updatedOn' => 'Updated On',
			'targetOn' => 'Target On',
			'repeatConditions' => 'Repeat Conditions',
			'ownerId' => 'Owner',
			'assigneeId' => 'Assignee',
			'assignedGroups' => 'Assigned Groups',
			'assignedUsers' => 'Assigned Users',
			'contextId' => 'Context',
			'blockedBy' => 'Blocked By Task #',
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
		$criteria->compare('status',$this->status,true);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('createdOn',$this->createdOn,true);
		$criteria->compare('updatedOn',$this->updatedOn,true);
		$criteria->compare('targetOn',$this->targetOn,true);
		$criteria->compare('repeatConditions',$this->repeatConditions,true);
		$criteria->compare('ownerId',$this->ownerId,true);
		$criteria->compare('assigneeId',$this->assigneeId,true);
		$criteria->compare('assignedGroups',$this->assignedGroups,true);
		$criteria->compare('contextId',$this->contextId,true);
		$criteria->compare('blockedBy',$this->blockedBy,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}