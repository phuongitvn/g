<?php

Yii::import('common.models._base.BaseLookupModel');

class LookupModel extends BaseLookupModel
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}