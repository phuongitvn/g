<?php
$themeUrl = Yii::app()->theme->baseUrl;
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="content-panel">
	<div class="page-title">
		<h2><?php echo $this->pageTitle;?></h2>
		<!-- breadcrumbs -->
		<ul class="breadcrumbs">
			<li><a href="./index.html">Trang chủ</a></li>
			<li>/</li>
			<li>Blog</li>
		</ul>
	</div>
</div>
<!-- content -->
<div class="container">
<div id="content"><div class="c2"><?php echo $content; ?></div></div>
</div>
<?php $this->endContent(); ?>