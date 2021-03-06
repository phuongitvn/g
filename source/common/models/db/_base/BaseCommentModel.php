<?php

/**
 * This is the model base class for the table "{{comment}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CommentModel".
 *
 * Columns in table "{{comment}}" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $post_id
 * @property string $content
 * @property integer $status
 * @property string $email
 * @property string $url
 * @property string $type
 * @property string $create_time
 * @property string $author
 * @property string $modified
 * @property integer $modified_by
 *
 */
abstract class BaseCommentModel extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{comment}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'CommentModel|CommentModels', $n);
	}

	public static function representingColumn() {
		return 'content';
	}

	public function rules() {
		return array(
			array('post_id, content, author', 'required'),
			array('post_id, status, modified_by', 'numerical', 'integerOnly'=>true),
			array('email, url, author', 'length', 'max'=>128),
			array('type', 'length', 'max'=>10),
			array('create_time, modified', 'safe'),
			array('status, email, url, type, create_time, modified, modified_by', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, post_id, content, status, email, url, type, create_time, author, modified, modified_by', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'post_id' => Yii::t('app', 'Post'),
			'content' => Yii::t('app', 'Content'),
			'status' => Yii::t('app', 'Status'),
			'email' => Yii::t('app', 'Email'),
			'url' => Yii::t('app', 'Url'),
			'type' => Yii::t('app', 'Type'),
			'create_time' => Yii::t('app', 'Create Time'),
			'author' => Yii::t('app', 'Author'),
			'modified' => Yii::t('app', 'Modified'),
			'modified_by' => Yii::t('app', 'Modified By'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('post_id', $this->post_id);
		$criteria->compare('content', $this->content, true);
		$criteria->compare('status', $this->status);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('url', $this->url, true);
		$criteria->compare('type', $this->type, true);
		$criteria->compare('create_time', $this->create_time, true);
		$criteria->compare('author', $this->author, true);
		$criteria->compare('modified', $this->modified, true);
		$criteria->compare('modified_by', $this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}