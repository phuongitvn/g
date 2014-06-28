<?php 
$themeUrl = Yii::app()->theme->baseUrl;
$controller = Yii::app()->controller->id;
$action = Yii::app()->controller->action->id;
?>
<!-- post-box -->
<article class="post-box">
	<span class="image alignleft listing"><img src="<?php echo $themeUrl;?>/images//blog-post-1-medium.jpg" alt="image description" /></span>
	<div class="text-box">
		<div class="meta">
			<h3><?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h3>
			<p>Đăng bởi <?php echo $data->author->username . ', Ngày ' . date('d/m/Y',strtotime($data->create_time)); ?>, <?php echo CHtml::link("Bình luận ({$data->commentCount})",$data->url.'#comments'); ?></p>
		</div>
		<p>
			<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			if($controller=='blog' && $action=='index'){
				echo $data->intro_text;
			}else{
				echo $data->content;
			}
			$this->endWidget();
			?>
		</p>
		<?php 
		if($controller=='blog' && $action=='index'):?>
		<p><?php echo CHtml::link('Xem tiếp', $data->url); ?></p>
		<?php endif;?>
	</div>
</article>