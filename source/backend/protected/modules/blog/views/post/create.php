<?php $this->pageTitle .=" - Create New Post";?>
<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>