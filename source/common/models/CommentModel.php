<?php

Yii::import('common.models._base.BaseCommentModel');

class CommentModel extends BaseCommentModel
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}