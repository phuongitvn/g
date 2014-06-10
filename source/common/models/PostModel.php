<?php

Yii::import('common.models._base.BasePostModel');

class PostModel extends BasePostModel
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}