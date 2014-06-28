<?php
$themeUrl = Yii::app()->theme->baseUrl;
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="content-panel">
	<div class="page-title">
		<h2>Our Blog</h2>
		<!-- breadcrumbs -->
		<ul class="breadcrumbs">
			<li><a href="./index.html">Home</a></li>
			<li>/</li>
			<li>Blog</li>
		</ul>
	</div>
</div>
<!-- content -->
<div class="container">
<div id="content"><div class="c1"><?php echo $content; ?></div></div>
<aside id="sidebar">
	<div class="widget">
		<!-- search-form -->
		<form action="#" class="search-form" />
			<fieldset>
				<input type="submit" value="submit" />
				<span class="text"><input type="text" placeholder="Click or type here to search" /></span>
			</fieldset>
		</form>
	</div>							
	<!-- widget -->
	<div class="widget">
		<h3>Blog Topics</h3>
		<!-- links-list -->
		<ul class="links-list">
			<li><a href="#">Marketing Basics</a></li>
			<li><a href="#">Online Marketing</a></li>
			<li><a href="#">Money Management</a></li>
			<li><a href="#">Payments & Collections</a></li>
			<li><a href="#">Business Opportunities</a></li>
		</ul>
		<h3>Archives</h3>
		<!-- links-list -->
		<ul class="links-list">
			<li><a href="#">April 2012</a></li>
			<li><a href="#">May 2012</a></li>
			<li><a href="#">June 2012</a></li>
			<li><a href="#">July 2012</a></li>
			<li><a href="#">August 2012</a></li>
		</ul>
	</div>
	<!-- widget -->
	<div class="widget">
		<h3>Photostream</h3>
		<!-- photos -->
		<ul class="photos">
			<li><a href="#"><img src="<?php echo $themeUrl;?>/images//popular-post-1.jpg" alt="image description" /></a></li>
			<li><a href="#"><img src="<?php echo $themeUrl;?>/images//popular-post-2.jpg" alt="image description" /></a></li>
			<li><a href="#"><img src="<?php echo $themeUrl;?>/images//popular-post-3.jpg" alt="image description" /></a></li>
			<li><a href="#"><img src="<?php echo $themeUrl;?>/images//popular-post-4.jpg" alt="image description" /></a></li>
			<li><a href="#"><img src="<?php echo $themeUrl;?>/images//popular-post-5.jpg" alt="image description" /></a></li>
			<li><a href="#"><img src="<?php echo $themeUrl;?>/images//popular-post-6.jpg" alt="image description" /></a></li>
		</ul>
	</div>
	<!-- widget -->
	<div class="widget">
		<h3>Latest tweets</h3>
		<!-- text-list -->
		<ul class="text-list">
			<li>
				<p>How to Hire the Right Employees for Your Startup: <a href="#">http://bit.ly/Pyy3vG</a> via <a href="#">@businessonmain</a> and <a href="#">#startups</a></p>
				<em class="date">11 hours, 31 minutes ago</em>
			</li>
			<li>
				<p>What You Need to Know! Check out these tips and avoid these common mistakes to lead a successful <a href="#">#smallbiz</a> meeting: <a href="#">http://bit.ly/OWaqtc</a></p>
				<em class="date">2 days, 14 hours ago</em>
			</li>
			<li>
				<p>Small tablets are better sales tools. Just one reason why you might choose an iPad Mini over the iPhone 5: <a href="#">http://bit.ly/NqwSZb</a>  via <a href="#">#mobile</a></p>
				<em class="date">2 days, 16 hours ago</em>
			</li>
		</ul>
	</div>
	<!-- widget -->
	<div class="widget">
		<h3>Popular Posts</h3>
		<!-- posts-list -->
		<ul class="posts-list">
			<li>
				<img class="image" src="<?php echo $themeUrl;?>/images//popular-post-1.jpg" alt="image description" />
				<div class="text-box">
					<h6><a href="./blog-single-post.html">No Mobile Website? You're Probably Turning Customers ...</a></h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ...</p>
				</div>
			</li>
			<li>
				<img class="image" src="<?php echo $themeUrl;?>/images//popular-post-2.jpg" alt="image description" />
				<div class="text-box">
					<h6><a href="./blog-single-post.html">What Facebook's Page Post Targeting Means to Your ...</a></h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ...</p>
				</div>
			</li>
			<li>
				<img class="image" src="<?php echo $themeUrl;?>/images//popular-post-3.jpg" alt="image description" />
				<div class="text-box">
					<h6><a href="./blog-single-post.html">What Entrepreneurs Need to Know About Their Brains</a></h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ... </p>
				</div>
			</li>
		</ul>
	</div>
	<!-- widget -->
	<?php $this->widget('TagCloud', array(
		'maxTags'=>Yii::app()->params['tagCloudCount'],
	)); ?>
</aside>
</div>
<?php $this->endContent(); ?>