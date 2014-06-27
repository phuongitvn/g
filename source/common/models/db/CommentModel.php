<?php

Yii::import('common.models.db._base.BaseCommentModel');

class CommentModel extends BaseCommentModel
{
	const STATUS_PENDING=1;
	const STATUS_APPROVED=2;
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}