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
		<?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->dropDownList($model, 'author_id', GxHtml::listDataEx(UserWebModel::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'author_id'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('comments')); ?></label>
		<?php echo $form->checkBoxList($model, 'comments', GxHtml::encodeEx(GxHtml::listDataEx(CommentModel::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('main', 'Save'), array('class'=>'button p0 size1of1'));
$this->endWidget();
?>
</div><!-- form -->