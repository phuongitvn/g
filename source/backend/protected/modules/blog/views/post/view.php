<div class="lastUnit size1of1 header">
<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>
</div>
<div class="o-act-tbar">
<a class="add-btn button p0" href="<?php echo $this->createUrl('create');?>"><?php echo Yii::t('main', 'Create');?></a>
<a class="add-btn button p0" href="<?php echo $this->createUrl('update', array('id' => $model->id));?>"><?php echo Yii::t('main', 'Update');?></a>
<a class="add-btn button p0" href="<?php echo $this->createUrl('delete', array('id' => $model->id));?>" onclick="return confirm('Are you sure you want to delete this item?');"><?php echo Yii::t('main', 'Delete');?></a>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'title',
'intro_text',
'content',
'tags',
'status',
'create_time',
'update_time',
array(
			'name' => 'author',
			'type' => 'raw',
			'value' => $model->author !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->author)), array('userWebModel/view', 'id' => GxActiveRecord::extractPkValue($model->author, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('comments')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->comments as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('commentModel/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>