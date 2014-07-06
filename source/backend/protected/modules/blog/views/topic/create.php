<?php
$this->pageTitle .=" - ".Yii::t("main","Create Topic");
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>