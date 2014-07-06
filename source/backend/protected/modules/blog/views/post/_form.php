<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'backend-post-model-form',
	'enableAjaxValidation' => false,
));
?>
	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 128)); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'intro_text'); ?>
		<?php echo $form->textArea($model, 'intro_text'); ?>
		<?php echo $form->error($model,'intro_text'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo CHtml::label('Topic', 'topic'); ?>
		<?php 
			$data = CHtml::listData(BackendTopicModel::model()->published()->findAll(), 'id', 'name');
			$select = array();
			if($topic){
				foreach ($topic as $topicId){
					$select[]=$topicId['topic_id'];
				}
			}
			echo CHtml::checkBoxList('topic', $select, $data);
		?>
		<?php echo $form->error($model,'intro_text'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php
		$this->widget('ext.elrte.elRTE', array(
		    'selector'=>'BackendPostModel_content',
		    'doctype' => '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">',
		    'cssClass' => 'el-rte',
		    'absoluteURLs' => 'false',
		    'allowSource' => 'true',
		    'lang' => 'en',
		    'styleWithCSS' => 'true',
		    'height' => '500',
		    'width' => '100%',
		    'fmAllow' => 'true',
		    'toolbar' => 'maxi',
		 ));
	?>
		<?php echo $form->textArea($model, 'content'); ?>
		<?php echo $form->error($model,'content'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textArea($model, 'tags'); ?>
		<?php echo $form->error($model,'tags'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php 
		$data = array(
				BackendPostModel::STATUS_PUBLISHED => 'Public',
				BackendPostModel::STATUS_DRAFT => 'Draft',
				BackendPostModel::STATUS_ARCHIVED => 'Archived'
		);
		echo $form->dropDownList($model, 'status', $data);
		?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->dropDownList($model, 'author_id', GxHtml::listDataEx(UserWebModel::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'author_id'); ?>
		</div><!-- row -->


<?php
$this->endWidget();
?>
</div><!-- form -->