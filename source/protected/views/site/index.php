<?php $themeUrl = Yii::app()->theme->baseUrl;?>
<?php 
Yii::app()->getClientScript()->registerCssFile("$themeUrl/css/prettyPhoto.css");
Yii::app()->getClientScript()->registerScriptFile("$themeUrl/js/jquery.prettyPhoto.js");
?>
<script type="text/javascript">
  $(document).ready(function(){
	$("a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'fast', /* fast/slow/normal */
		slideshow: 5000, /* false OR interval time in ms */
		autoplay_slideshow: false, /* true/false */
		opacity: 0.70, /* Value between 0 and 1 */
		show_title: true, /* true/false */
		allow_resize: true, /* Resize the photos bigger than viewport. true/false */
		default_width: 500,
		default_height: 344,
		counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
		theme: 'pp_default' /* light_rounded / dark_rounded / light_square / dark_square / facebook */
	});
  });
</script>
<div id="main">
	<?php $this->widget('application.widgets.SlidePhotos.SlidePhotosWidget')?>
	<!-- boxes -->
	<section class="boxes">
		<div class="holder">
			<!-- title-box -->
			<div class="title-box">
				<h2>Inbound Marketing Software</h2>
				<p>SaleFly's software contains everything you need to do inbound marketing. You can blog, send email, monitor social media, create web and landing pages, do marketing automation, SEO and more - all in one integrated platform</p>
			</div>
			<!-- boxes-section -->
			<div class="boxes-section">
				<article class="col">
					<a href="#"><div class="icon ico1"></div></a>
					<div class="text-box">
						<h3>Tools to Attract Visitors</h3>
						<p>Blogging software that fuels lead generation.</p>
						<a href="#" class="btn">Read more</a>
					</div>
				</article>
				<article class="col">
					<a href="#"><div class="icon ico2"></div></a>
					<div class="text-box">
						<h3>Tools to Convert Leads</h3>
						<p>Create a powerful landing page in 3 easy steps</p>
						<a href="#" class="btn">Read more</a>
					</div>
				</article>
				<article class="col last">
					<a href="#"><div class="icon ico3"></div></a>
					<div class="text-box">
						<h3>Tools to Close Customers</h3>
						<p>All your analytics in one place.</p>
						<a href="#" class="btn">Read more</a>
					</div>
				</article>
			</div>
		</div>
	</section>
	<div class="main-container holder">
		<!-- grid-cols -->
		<div class="grid-cols">
			<!-- col67 -->
			<div class="col67">
				<div class="col-holder">
					<?php $this->widget('application.widgets.CustomHtml.customHtml', array('_wID'=>20));?>
				</div>
			</div>					
							<!-- col33 -->
			<div class="col33">
				<div class="col-holder">
				<?php $this->widget('application.widgets.tab.TabWidget', array('_wID'=>21));?>
				</div>
			</div>
		</div>
		<!-- grid-cols -->
		<div class="grid-cols">
			<!-- col67 -->
			<div class="col67">
				<div class="col-holder">
					<?php $this->widget('application.widgets.CustomHtml.customHtml', array('_wID'=>22));?>
				</div>
			</div>						
			<!-- col33 -->
			<div class="col33">
				<div class="col-holder testimonials">
					<!-- testimonials-item -->
					<h3>Client Testimonials</h3>
					<ul>
						<li>
							<img class="image" src="<?php echo $themeUrl; ?>/images/testimonial-2.jpg" alt="image description" />
							<blockquote>
								<q>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</q>
								<cite>- John, <a href="#">The Bright Agency</a></cite>
							</blockquote>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- clients -->
	<?php $this->widget('application.widgets.partner.PartnerWidget')?>
</div>