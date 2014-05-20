<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link type="image/x-icon" rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" >
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle)." | ".Yii::app()->name; ?></title>
</head>

<body>
<div id="page">
	<div id="page-container">
		<div id="toolbar">
			<div class="wrap-inner pane">
				<div class="user"><a href="#"><?php echo Yii::t("main","Register")?></a>&nbsp;|&nbsp;<a href="#"><?php echo Yii::t("main","Login")?></a></div>
			</div>
		</div>
		<div id="header">
			<div class="wrr-header wrap-inner">
				<div class="pane">
					<div id="logo"><img width="160" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_g.png" /></div>
					<div id="menu">
						<div class="wrr-menu">
						<?php $this->widget('application.widgets.Menu.Menu', array('_item_active'=>$this->activemenu,'_gmid'=>1));?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		if($this->clips['body-top']){
			echo '<div id="slide">'.$this->clips['body-top'].'</div>';
		}
		?>
			<?php echo $content;?>
		<div id="footer">
			<div class="wrap-inner">
				<div class="pane">
					<?php $this->widget('application.widgets.G_FooterWidget', array(
							'data'=>array(
									array('title'=>'Testtimonials','html'=>'
											<p>We are providing the best solution for web development.</p>
											'
									),
									array('title'=>'What We Do','html'=>'
											<p>Yii experts.</p>
											<p>Magento experts.</p>
											<p>Joomla experts.</p>
											<p>Wordpress experts.</p>
											<p>SEO, Social network marketing, Adwords Google.</p>
											'
									),
									array('title'=>'Find Us','html'=>'
										<p>Gurucodevn Service & Technology development.</p>
										<p>Address: 112 - Me Tri - Tu Liem - Ha Noi - Viet Nam</p>
										<p>Mobile: 0978 55 77 28</p>
										<p>Web: http://gurucodevn.com</p>
										'
									),
							)
					));?>
					<p class="copyright">&copy;2014 Gurucodevn Premium Responsive Business Solutions for Web 2.0</p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
