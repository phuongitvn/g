<?php

Yii::import('common.models.db._base.BaseTagModel');

class TagModel extends BaseTagModel
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}