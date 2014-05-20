<?php $this->beginWidget('system.web.widgets.CClipWidget', array('id'=>'body-top'));?>
<?php $this->widget('application.widgets.SlideImages.SlideImagesWidget');?>
<?php $this->endWidget();?>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('application.widgets.G_FooterWidget', array(
		'style_class'=>'s-center',
		'data'=>array(
			array('title'=>'Web Development','html'=>'
					<img width="200" src="'.Yii::app()->request->baseUrl.'/images/wd.png" />
					<p>We are providing the best solution for web development.</p>
					'
			),
			array('title'=>'E-Commerce System','html'=>'
					<img width="150" src="'.Yii::app()->request->baseUrl.'/images/shopping.png" />
					<p>We help business build E-Commerce system for online shopping.</p>'
			),
			array('title'=>'Our Store','html'=>'
					<a href="#"><img width="200" src="'.Yii::app()->request->baseUrl.'/images/store.png" /></a>
					<p>We offer a lot of extension, template, script of Magento, Wordpress, Joomla for optimizer your web at Our Store.</p>'
			),	
		)
));?>
<?php $this->widget('application.widgets.G_FooterWidget', array(
		'style_class'=>'s-center',
		'data'=>array(
			array('title'=>'Google Adwords','html'=>'
					<img width="200" src="'.Yii::app()->request->baseUrl.'/images/google-adwords.png" />
					<p>Google AdWords Express is a great alternative for small businesses to market on the internet and advertise locally.</p>
					'
			),
			array('title'=>'Our Skills and Experience','html'=>'
					<img width="200" src="'.Yii::app()->request->baseUrl.'/images/SkillsDevelopment1.png" />
					<p>We have least 4 years experience developed web applications and technologies by PHP.</p>'
			),
			array('title'=>'Our Support','html'=>'
					<a href="#"><img width="200" src="'.Yii::app()->request->baseUrl.'/images/support.jpg" /></a>
					<p>We always at here support you 24/7 via online communication.</p>'
			),	
		)
));?>